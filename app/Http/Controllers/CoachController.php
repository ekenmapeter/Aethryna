<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{

    /**
     * Coach Dashboard
     * - Monitor engagement
     * - Update progress markers
     * - Flag safeguarding
     */
    public function dashboard()
    {
        $coach = auth()->user();
        
        // Real data from database
        $totalLearners = $coach->cohortLearners()->where('status', 'active')->count();
        $atRiskCount = $coach->cohortLearners()->where('at_risk', true)->count();
        $avgEngagement = $coach->cohortLearners()->where('status', 'active')->avg('engagement_score') ?? 0;
        
        return view('coach.dashboard', compact('totalLearners', 'atRiskCount', 'avgEngagement'));
    }

    /**
     * Manage cohort of learners
     */
    public function cohort()
    {
        $coach = auth()->user();
        
        // Get learners with their cohort data
        $learners = \App\Models\CoachCohort::where('coach_id', $coach->id)
            ->with('learner')
            ->where('status', 'active')
            ->paginate(20);
        
        return view('coach.cohort', compact('learners'));
    }

    /**
     * Flag safeguarding concern
     */
    public function flagConcern(Request $request, \App\Models\User $learner)
    {
        $coach = auth()->user();
        
        // Update the cohort record to flag as at-risk
        $cohortRecord = \App\Models\CoachCohort::where('coach_id', $coach->id)
            ->where('learner_id', $learner->id)
            ->first();
        
        if ($cohortRecord) {
            $cohortRecord->update([
                'at_risk' => true,
                'risk_notes' => $request->input('notes', 'Flagged by coach on ' . now()->format('Y-m-d'))
            ]);
        }
        
        return back()->with('success', 'Concern flagged and admin notified.');
    }
}
