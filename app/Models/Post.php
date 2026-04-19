<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table = posts
    // protected $table = 'posts';

    // mass assignment
    protected $fillable = [
        'title',
        'tags',
        'author_id',
        'estimation_read_minutes',
        'thumbnail_url',
        'body',
        //...
    ];

    // protected $guarded = [];
}
