<?php

namespace App\Http\Controllers;

use App\Models\WaitlistEntry;
use App\Services\EmailOctopusService;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    public function __construct(protected EmailOctopusService $emailOctopus)
    {
    }

    /**
     * Store a new waitlist entry (from footer newsletter form).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Check if already on waitlist
        $existing = WaitlistEntry::where('email', $validated['email'])->first();

        if (!$existing) {
            WaitlistEntry::create([
                'email' => $validated['email'],
                'source' => 'footer',
            ]);
        }

        // Sync to EmailOctopus (fails soft: never blocks the signup).
        $this->emailOctopus->subscribe(
            $validated['email'],
            [],
            ['waitlist', 'footer']
        );

        return redirect()->back()->with('waitlist_success', 'You\'re on the list! We\'ll keep you updated.');
    }
}
