<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    protected $fillable = [
        'user_id',
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
