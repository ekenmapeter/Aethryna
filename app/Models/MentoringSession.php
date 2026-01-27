<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentoringSession extends Model
{
    protected $fillable = [
        'mentor_id',
        'learner_id',
        'session_date',
        'duration_minutes',
        'session_type',
        'topics_discussed',
        'action_items',
        'mentor_notes',
        'learner_engagement',
        'support_flagged',
        'support_notes',
    ];

    protected $casts = [
        'session_date' => 'datetime',
        'support_flagged' => 'boolean',
    ];

    /**
     * Get the mentor for this session
     */
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    /**
     * Get the learner for this session
     */
    public function learner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'learner_id');
    }
}
