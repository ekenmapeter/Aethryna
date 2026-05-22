<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Thin wrapper around the EmailOctopus REST API (v1.6).
 *
 * Docs: https://emailoctopus.com/api-documentation/lists/create-contact
 *
 * This service is intentionally "fail soft": if EmailOctopus is
 * unreachable or misconfigured, it logs the problem and returns false
 * rather than throwing, so a marketing sync issue never breaks a user
 * signing up on the website. The local database remains the source of truth.
 */
class EmailOctopusService
{
    protected ?string $apiKey;
    protected ?string $listId;
    protected string $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.emailoctopus.key');
        $this->listId = config('services.emailoctopus.list_id');
        $this->baseUrl = rtrim(config('services.emailoctopus.base_url', 'https://emailoctopus.com/api/1.6'), '/');
    }

    /**
     * Is the integration configured? If not, calls are skipped silently.
     */
    public function isConfigured(): bool
    {
        return !empty($this->apiKey) && !empty($this->listId);
    }

    /**
     * Add (or quietly ignore an existing) contact on the configured list.
     *
     * @param  string  $email   Subscriber email address.
     * @param  array   $fields  Key/value field values, keyed by EmailOctopus tag (e.g. ['FirstName' => 'Joe']).
     * @param  array   $tags    Tags to attach (e.g. ['learner', 'sessions']).
     * @return bool             True on success or already-subscribed; false on a real failure.
     */
    public function subscribe(string $email, array $fields = [], array $tags = []): bool
    {
        if (!$this->isConfigured()) {
            Log::info('EmailOctopus not configured; skipping subscribe for ' . $email);
            return false;
        }

        try {
            $payload = [
                'api_key' => $this->apiKey,
                'email_address' => $email,
                'status' => 'SUBSCRIBED',
            ];

            if (!empty($fields)) {
                $payload['fields'] = $fields;
            }

            if (!empty($tags)) {
                $payload['tags'] = $tags;
            }

            $response = Http::timeout(8)
                ->acceptJson()
                ->post("{$this->baseUrl}/lists/{$this->listId}/contacts", $payload);

            if ($response->successful()) {
                return true;
            }

            // An existing contact is not an error for our purposes.
            $code = $response->json('error.code');
            if ($code === 'MEMBER_EXISTS_WITH_EMAIL_ADDRESS') {
                return true;
            }

            Log::warning('EmailOctopus subscribe failed', [
                'email' => $email,
                'status' => $response->status(),
                'code' => $code,
                'body' => $response->json(),
            ]);

            return false;
        } catch (\Throwable $e) {
            Log::error('EmailOctopus subscribe threw an exception', [
                'email' => $email,
                'message' => $e->getMessage(),
            ]);

            return false;
        }
    }
}
