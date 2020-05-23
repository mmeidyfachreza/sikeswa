<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ImmunizationHistory extends Model
{
    protected $fillable = [
        'date',
        'student_id',
        'age_year',
        'age_month',
    ];

    public function immunization()
    {
        return $this->belongsToMany('App\Immunization','immune_hists','immunization_histories_id','immunization_id')
                    ->withPivot('status')
                    ->withTimestamps();
    }

    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
    }

//     public function setDateAttribute($value)
// {
//     $this->attributes['date'] =  Carbon::parse($value);
// }
}
