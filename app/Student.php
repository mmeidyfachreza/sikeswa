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
    ];
    public function classroom()
    {
        return $this->belongsTo('App\Classroom','classroom_id');
    }

    public function health()
    {
        return $this->hasMany('App\Health');
    }

    public function Immune_history()
    {
        return $this->hasMany('App\ImmunizationHistory');
    }

    public function scopeSearch($query,$name)
    {
        return $query->where('name','LIKE','%'.$name.'%');
    }

    public function pengukuranYear($year)
    {
        return $this->hasMany('App\Health')->whereYear('date', '=', $year)->get();
    }
}
