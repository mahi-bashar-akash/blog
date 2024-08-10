<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            $user = Auth::user();
            if($category->user_id == null){
                $category->user_id = $user->id;
            }
        });
    }
}
