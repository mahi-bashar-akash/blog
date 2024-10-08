<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'name',
        'description',
        'category_id',
        'status',
        'published_at',
        'views_count',
        'user_id',
    ];

    public function author_info(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category_info(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = ['created_at_format', 'published_at_format'];

    public function getCreatedAtFormatAttribute(): ?string
    {
        if (isset($this->attributes['created_at'])) {
            return date('d/m/Y', strtotime($this->attributes['created_at']));
        }
        return null;
    }

    public function getPublishedAtFormatAttribute(): ?string
    {
        if (isset($this->attributes['published_at'])) {
            return date('d/m/Y', strtotime($this->attributes['published_at']));
        }
        return null;
    }
}
