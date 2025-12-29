<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pathway extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'recommended_for',
        'skills',
        'career_paths',
        'difficulty_level',
        'duration_months',
        'image_path',
        'is_active',
    ];

    protected $casts = [
        'skills' => 'array',
        'career_paths' => 'array',
        'is_active' => 'boolean',
    ];

    public function assessmentResults()
    {
        return $this->hasMany(AssessmentResult::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
