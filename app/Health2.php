<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Health2 extends Model
{
    protected $fillable=[
        'date',
        'student_id',
        'height',
        'weight',
        'bmi',
        'age',

        'tooth_cond',
        'hair_cond',
        'nail_cond',
        'ear_cond',
        'skin_cond',

        'height_stat',
        'weight_stat',
        'bmi_stat',

        'tooth_stat',
        'hair_stat',
        'nail_stat',
        'ear_stat',
        'skin_stat',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
    }

    public function setDateAttribute($value)
{
    $this->attributes['date'] =  Carbon::parse($value);
}
}
