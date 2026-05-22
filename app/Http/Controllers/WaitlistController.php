<?php

namespace App\Http\Controllers;

use App\Models\WaitlistEntry;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
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

        // TODO: Send confirmation email via Resend once API key is configured
        // Resend::emails()->send([
        //     'from' => 'SkillsCo-op <hello@skillscoop.org>',
        //     'to' => [$validated['email']],
        //     'subject' => 'Welcome to the SkillsCo-op Waitlist!',
        //     'html' => '<p>Thank you for joining our waitlist...</p>',
        // ]);

        return redirect()->back()->with('waitlist_success', 'You\'re on the list! We\'ll keep you updated.');
    }
}
