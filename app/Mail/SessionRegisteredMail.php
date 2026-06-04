<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SessionRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $eventLink;
    public $imageUrl;

    /**
     * Create a new message instance.
     *
     * @param string $eventLink
     * @param string $imageUrl
     */
    public function __construct(string $eventLink, string $imageUrl)
    {
        $this->eventLink = $eventLink;
        $this->imageUrl = $imageUrl;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your Upcoming Skills Co‑op Event')
                    ->view('emails.session_registered')
                    ->with([
                        'eventLink' => $this->eventLink,
                        'imageUrl' => $this->imageUrl,
                    ]);
    }
}
