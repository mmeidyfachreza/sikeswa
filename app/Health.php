<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable=[
        'date',
        'height',
        'weigth',
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
}
