<?php

namespace App\Http\Controllers;

use App\Models\Pathway;
use App\Models\SessionRegistration;
use App\Services\EmailOctopusService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(protected EmailOctopusService $emailOctopus)
    {
    }

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

        SessionRegistration::create($validated);

        // Sync to EmailOctopus (fails soft: never blocks the registration).
        $nameParts = preg_split('/\s+/', trim($validated['name']), 2);
        $this->emailOctopus->subscribe(
            $validated['email'],
            [
                'FirstName' => $nameParts[0] ?? '',
                'LastName' => $nameParts[1] ?? '',
            ],
            ['sessions', $validated['interest_type']]
        );

        return redirect()->route('sessions')
            ->with('success', 'Thank you for registering! We\'ll send you details about our next panel session to your email address.');
    }
}
