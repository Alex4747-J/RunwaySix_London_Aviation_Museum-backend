<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventsBlog extends Model
{
    use SoftDeletes;

    protected $table = 'events_blog';

    protected $fillable = [
        'title',
        'post_type',
        'event_date',
        'event_time',
        'location',
        'description',
        'content',
        'image_path',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];
}
