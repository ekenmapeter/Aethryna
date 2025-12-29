<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'option_label',
        'answer_text',
        'clusters',
        'order',
        'is_active',
    ];

    protected $casts = [
        'clusters' => 'array',
        'is_active' => 'boolean',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
