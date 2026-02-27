<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
        'position',
    ];

    public function getYoutubeIdAttribute()
    {
        preg_match(
            '/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/',
            $this->link,
            $matches
        );

        return $matches[1] ?? null;
    }

    public function getThumbnailAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }

        if ($this->youtube_id) {
            return "https://img.youtube.com/vi/{$this->youtube_id}/hqdefault.jpg";
        }

        return null;
    }
}
