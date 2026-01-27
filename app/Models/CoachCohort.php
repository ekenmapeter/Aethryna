<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoachCohort extends Model
{
    protected $fillable = [
        'coach_id',
        'learner_id',
        'cohort_name',
        'start_date',
        'expected_end_date',
        'status',
        'engagement_score',
        'last_activity_date',
        'at_risk',
        'risk_notes',
    ];

    protected $casts = [
        'start_date' => 'date',
        'expected_end_date' => 'date',
        'last_activity_date' => 'date',
        'at_risk' => 'boolean',
    ];

    /**
     * Get the coach for this cohort assignment
     */
    public function coach(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coach_id');
    }

    /**
     * Get the learner in this cohort
     */
    public function learner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'learner_id');
    }
}
