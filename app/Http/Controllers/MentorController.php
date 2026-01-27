<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{

    /**
     * Mentor Dashboard
     * - Track learner progress
     * - Access mentor resources
     */
    public function dashboard()
    {
        $mentor = auth()->user();
        
        // Real data
        $assignedLearnersCount = $mentor->assignedLearners()->wherePivot('status', 'active')->count();
        $sessionsThisMonth = $mentor->mentoringSessions()
            ->whereMonth('session_date', now()->month)
            ->whereYear('session_date', now()->year)
            ->count();
        
        return view('mentor.dashboard', compact('assignedLearnersCount', 'sessionsThisMonth'));
    }

    /**
     * View assigned learners (1-5)
     */
    public function learners()
    {
        $mentor = auth()->user();
        
        // Get assigned learners with pivot data
        $learners = $mentor->assignedLearners()
            ->wherePivot('status', 'active')
            ->get();
        
        return view('mentor.learners', compact('learners'));
    }

    /**
     * Log mentoring session
     */
    public function logSession(Request $request)
    {
        $validated = $request->validate([
            'learner_id' => 'required|exists:users,id',
            'session_date' => 'required|date',
            'duration_minutes' => 'nullable|integer',
            'session_type' => 'required|in:one-on-one,group,workshop,check-in',
            'topics_discussed' => 'nullable|string',
            'action_items' => 'nullable|string',
            'mentor_notes' => 'nullable|string',
            'learner_engagement' => 'nullable|in:low,medium,high',
        ]);
        
        \App\Models\MentoringSession::create([
            'mentor_id' => auth()->id(),
            'learner_id' => $validated['learner_id'],
            'session_date' => $validated['session_date'],
            'duration_minutes' => $validated['duration_minutes'] ?? null,
            'session_type' => $validated['session_type'],
            'topics_discussed' => $validated['topics_discussed'] ?? null,
            'action_items' => $validated['action_items'] ?? null,
            'mentor_notes' => $validated['mentor_notes'] ?? null,
            'learner_engagement' => $validated['learner_engagement'] ?? null,
        ]);
        
        return back()->with('success', 'Session logged successfully.');
    }

}
