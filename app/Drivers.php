<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];
}
