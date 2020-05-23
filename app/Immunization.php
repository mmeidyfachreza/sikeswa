<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    protected $fillable = [
        'name',
        'codename',
        'description'
    ];

    public function Immunization_History()
    {
        return $this->belongsToMany('App\ImmunizationHistory');
    }
}
