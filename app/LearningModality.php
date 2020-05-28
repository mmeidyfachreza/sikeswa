<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningModality extends Model
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
