<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'assessment_id',
        'pathway_id',
        'result_type',
        'score',
        'cluster',
        'recommendation_text',
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function pathway()
    {
        return $this->belongsTo(Pathway::class);
    }

    public function scopePrimary($query)
    {
        return $query->where('result_type', 'primary');
    }

    public function scopeSecondary($query)
    {
        return $query->where('result_type', 'secondary');
    }
}
