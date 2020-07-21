<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'uuid',
        'nama',
        'namafile',
        'tahun',
        'publikasi'
    ]
}
