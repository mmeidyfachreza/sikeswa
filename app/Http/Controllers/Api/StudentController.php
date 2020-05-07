<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Student;

class StudentController extends Controller
{
    public function GetNames()
    {
        return StudentResource::collection(Student::all());
    }
}
