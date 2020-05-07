<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'name',
        'born_city',
        'address',
        'born_date',
        'gender',
        'blood_type',
        'school_from',
        'classroom_id',
        'father_name',
        'mother_name',
        'guardian',
        'no_bpjs',
        'faskes_bpjs',
        'avatar'
    ];
    public function classroom()
    {
        return $this->belongsTo('App\Classroom','classroom_id');
    }

    public function health()
    {
        return $this->hasMany('App\Health');
    }
}
