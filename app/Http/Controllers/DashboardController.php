<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_student = Student::count();
        $total_boy = Student::where('gender','=','Laki-laki')->count();
        $total_girl = Student::where('gender','=','Perempuan')->count();
        return view('admin.home',compact('total_student','total_boy','total_girl'));
    }

    public function quick_access()
    {
        $students = Student::all();
        return view('tested',compact('students'));
    }
}
