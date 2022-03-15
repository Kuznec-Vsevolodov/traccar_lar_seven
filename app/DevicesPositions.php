<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevicesPositions extends Model
{
    protected $fillable = [
        'deviceid',
        'speed',
        'longitude',
        'latitude',
        'course',
        'distance'
    ];
}
