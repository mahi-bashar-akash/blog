<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use HasSlug;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'category',
        'tags',
        'featured_image',
        'status',
        'published_at',
        'views_count',
        'meta_title',
        'meta_description',
        'is_featured',
        'allow_comments',
    ];


    public function author()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $appends = ['created_at_format', 'published_at_format'];

    public function getCreatedAtFormatAttribute()
    {
        if (isset($this->attributes['created_at'])) {
            return date('d/m/Y', strtotime($this->attributes['created_at']));
        }
        return null;
    }

    public function getPublishedAtFormatAttribute()
    {
        if (isset($this->attributes['published_at'])) {
            return date('d/m/Y', strtotime($this->attributes['created_at']));
        }
        return null;
    }



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getContentAttribute($value)
    {
        // Replace [APP_URL] with the actual app URL
        $appUrl = config('app.url');
        return str_replace('[APP_URL]', $appUrl, $value);
    }

}
