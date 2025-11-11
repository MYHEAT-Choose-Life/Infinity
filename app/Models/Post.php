<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'slug',
        'excerpt',
        'content',
        'image',
        'video_URL',
        'type',
        'published_at',
    ];

    protected static function booted() {

        static::saving(function($post){
            if ($post->video_URL) {
                $post->type = 'video';
                $post->thumbnail = "https://img.youtube.com/vi/{$post->youtube_id}/hqdefault.jpg";
            }

            if($post->type === 'video' && empty($post->content)){
                $post->content = '';
            }
        });

        static::creating(function($post){

            $baseSlug = Str::slug($post->title);
            $slug = $baseSlug;
            $count = 1;

            while (Post::where('slug', $slug)->exists()){

                $slug = "{$baseSlug}-{$count}";
                $count++;
            }

            $post->slug = $slug;

        });

        static::updating(function($post){

            if ($post->isDirty('title')){
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function getYoutubeIdAttribute(): ?string
    {
        if (! $this->video_url) {
            return null;
        }

        // Extract YouTube ID from multiple possible URL formats
        preg_match(
            '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/',
            $this->video_url,
            $matches
        );

        return $matches[1] ?? null;
    }

    public function getYoutubeThumbnailAttribute(): ?string
    {
        return $this->youtube_id
            ? "https://img.youtube.com/vi/{$this->youtube_id}/hqdefault.jpg"
            : null;
    }

    public function getYoutubeEmbedUrlAttribute(): ?string
    {
        return $this->youtube_id
            ? "https://www.youtube.com/embed/{$this->youtube_id}"
            : null;
    }

}
