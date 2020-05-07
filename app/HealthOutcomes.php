<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthOutcomes extends Model
{
    protected $fillable = [
        'description',
        'type'
    ];
}
