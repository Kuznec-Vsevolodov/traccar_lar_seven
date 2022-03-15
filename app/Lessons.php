<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $fillable = [
        'device_id',
        'lesson_start',
        'lesson_end',
        'lesson_driver',
        'max_speed',
        'harsh_braking_count',
        'rapid_acceleration_count',
        'wide_turn_count',
        'lesson_student',
        'grade'
    ];
}
