<?php

namespace App\Http\Controllers;

use App\Events\SessionRegistered;
use App\Models\Pathway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $pathways = Pathway::active()->get();

        return view('home', compact('pathways'));
    }

    public function about()
    {
        return view('about');
    }

    public function pathway()
    {
        $pathways = \App\Models\Pathway::active()->get();

        return view('pathway', compact('pathways'));
    }

    public function programs()
    {
        $pathways = Pathway::active()->paginate(4);

        return view('programs', compact('pathways'));
    }

    public function impact()
    {
        return view('impact');
    }

    public function stories()
    {
        return view('stories');
    }

    public function sessions()
    {
        return view('sessions');
    }

    public function registerSession(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'interest_type' => 'required|in:learner,mentor,partner,curious',
            'referral_source' => 'nullable|string|max:255',
        ]);

        // Prepare event details
        $eventLink = 'https://www.eventbrite.co.uk/e/the-skills-co-op-sessions-tickets-1990225897234?utm-campaign=social&utm-content=attendeeshare&utm-medium=discovery&utm-term=listing&utm-source=wsa&aff=ebdsshwebmobile';
        $imageUrl = asset('images/event_image.jpeg');
        // Send registration email with event details
        Mail::to($validated['email'])->send(new \App\Mail\SessionRegisteredMail($eventLink, $imageUrl));

        // Fire event after successful registration
        event(new SessionRegistered);
    }
}
