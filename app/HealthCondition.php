<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    protected $fillable = [
        'description',
        'type'
    ];
}
