<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentorLearnerAssignment extends Model
{
    protected $fillable = [
        'mentor_id',
        'learner_id',
        'status',
        'assigned_date',
        'completion_date',
        'notes',
    ];

    protected $casts = [
        'assigned_date' => 'date',
        'completion_date' => 'date',
    ];

    /**
     * Get the mentor for this assignment
     */
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    /**
     * Get the learner for this assignment
     */
    public function learner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'learner_id');
    }
}
