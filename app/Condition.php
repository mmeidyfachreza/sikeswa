<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = [
        'description',
        'type',
        'outcomes'
    ];

    public function health()
    {
        return $this->belongsToMany('App\Health');
    }
}
