<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'thumbnail',
        'github_url',
        'live_url',
        'technologies',
        'is_featured',
        'status',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
        'status' => 'boolean',
    ];
}
