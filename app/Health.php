<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable = [
        'date',
        'student_id',
        'height',
        'weight',
        'bmi',
        'age_year',
        'age_month',
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
        return $this->belongsTo('App\Student','student_id');
    }

    public function tes($id)
    {
        return $this->where('student_id', '=', $id)->get();
    }
}
