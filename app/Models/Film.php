<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'poster_image',
        'preview_image',
        'background_image',
        'background_color',
        'video_link',
        'preview_video_link',
        'description',
        'director',
        'starring',
        'run_time',
        'released',
    ];

    public function genres():BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }


}

