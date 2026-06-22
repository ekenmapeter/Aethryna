<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PanelSpeaker extends Model
{
    protected $fillable = [
        'name', 'title', 'company', 'bio', 'photo_path',
        'linkedin_url', 'twitter_url',
    ];

    public function sessions(): BelongsToMany
    {
        return $this->belongsToMany(
            PanelSession::class,
            'panel_session_speakers',
            'panel_speaker_id',
            'panel_session_id'
        )->withPivot('topic', 'sort_order');
    }

    // Resolve photo: falls back to a placeholder if no photo is set
    public function photoUrl(): string
    {
        if ($this->photo_path) {
            return asset($this->photo_path);
        }
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=038b89&color=fff&size=200';
    }
}
