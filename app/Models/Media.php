<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{

    protected $fillable = [
        'filename',
        'mime_type',
        'file_type',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];

    protected $encryptMetadata = true;

    public function setMetadataAttribute($value)
    {
        if ($this->encryptMetadata) {
            $this->attributes['metadata'] = Crypt::encryptString(serialize($value));
        } else {
            $this->attributes['metadata'] = $value;
        }
    }

    public function getMetadataAttribute($value)
    {
        if ($this->encryptMetadata) {
            return unserialize(Crypt::decryptString($value));
        } else {
            return $value ? json_decode($value, true) : null;
        }
    }

    public function getUrlAttribute()
    {
        return Storage::disk('public')->url("media/{$this->filename}");
    }

}
