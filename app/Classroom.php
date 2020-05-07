<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name','description'];
    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
