<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = [
        'min_value',
        'max_value',
        'type',
        'description',
    ];

    public function health()
    {
        return $this->belongsToMany('App\Health');
    }
}
