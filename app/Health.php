<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable = [
        'date',
        'student_nis',
        'height',
        'weight',
        'bmi',
        'age_year',
        'age_month',
        'comment',
    ];

    public function condition()
    {
        return $this->belongsToMany('App\Condition')
                    ->withTimestamps();
    }

    public function measurement()
    {
        return $this->belongsToMany('App\Measurement')
                    ->withTimestamps();
    }

    public function student()
    {
        return $this->belongsTo('App\Student','student_nis');
    }

    public function tes($id)
    {
        return $this->where('student_nis', '=', $id)->get();
    }
}
