<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'author_id',
        'lesson_id',
        'longitude',
        'latitude',
        'text'
    ];
}
