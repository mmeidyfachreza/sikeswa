<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrainDomination extends Model
{
    protected $fillable = [
        'question',
        'type',
    ];

    public function medicalRecord()
    {
        return $this->belongsToMany('App\MedicalRecord');
    }
}
