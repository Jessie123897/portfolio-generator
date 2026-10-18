<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'title',
        'about',
        'email',
        'phone',
        'location',
        'profile_image',
        'template',
        'educational_background',
        'skills',
        'projects',
        'work_experience',
        'social_links',
    ];
}