<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MentalHealth2 extends Model
{
    protected $table = 'mental_healths2';

    protected $fillable = [
        'question',
        'type',
    ];

    public function medicalRecord()
    {
        return $this->belongsToMany('App\MedicalRecord');
    }
}
