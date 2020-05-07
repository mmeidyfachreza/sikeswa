<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryUser extends Model
{
    protected $table = 'category_users';
    protected $fillable = ['name','description'];
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
