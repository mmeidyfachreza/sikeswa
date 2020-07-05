<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'date',
        'student_id',
    ];

    public function learningModality()
    {
        return $this->belongsToMany('App\LearningModality','medical_record_lm','medical_record_id','learning_modalities_id')
                    ->withPivot('score')
                    ->withTimestamps();
    }

    public function mentalHealth()
    {
        return $this->belongsToMany('App\MentalHealth','medical_record_mh')
                    ->withPivot('score')
                    ->withTimestamps();
    }

    public function mentalHealth2()
    {
        return $this->belongsToMany('App\MentalHealth2','medical_record_mh2','medical_record_id','mental_healths2_id')
                    ->withPivot('score')
                    ->withTimestamps();
    }

    public function brainDomination()
    {
        return $this->belongsToMany('App\BrainDomination','medical_record_bd')
                    ->withPivot('score')
                    ->withTimestamps();
    }

    public function healthScreening()
    {
        return $this->belongsToMany('App\HealthScreening','medical_record_hs')
                    ->withPivot('choice')
                    ->withPivot('description')
                    ->withTimestamps();
    }

    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
    }
}
