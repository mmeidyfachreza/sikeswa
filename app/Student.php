<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Student extends Model
{
    protected $primaryKey = 'nis';

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    protected $fillable = [
        'nis',
        'name',
        'birth_place',
        'birth_date',
        'address',
        'gender',
        'school_from',
        'class_year',
        'classroom',
        'father_name',
        'mother_name',
        'guardian',
        'phone_number',
        'blood_type',
        'no_bpjs',
        'faskes_bpjs',
        'avatar'
    ];

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
