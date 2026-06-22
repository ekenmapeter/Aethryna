<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PanelMedia extends Model
{
    protected $fillable = [
        'panel_session_id', 'type', 'url', 'caption',
        'thumbnail_url', 'sort_order',
    ];

    public function session(): BelongsTo
    {
        return $this->belongsTo(PanelSession::class);
    }

    // Convert a YouTube watch URL to an embed URL automatically
    public function embedUrl(): string
    {
        if ($this->type === 'video') {
            $url = $this->url;
            // youtube.com/watch?v=ID -> youtube.com/embed/ID
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]+)/', $url, $m)) {
                return 'https://www.youtube.com/embed/' . $m[1];
            }
        }
        return $this->url;
    }
}
