<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Student;
use DateTime;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('classroom')->get();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::all();
        $blood_type = ['Tidak Tahu','A','B','AB','O'];
        $gender = ['Laki-laki','Perempuan'];
        return view('admin.student.form',compact('classrooms','blood_type','gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('siswa.index')->with('success','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        $currentDateTime = new DateTime;
        $dateTimeInTheFuture = new DateTime($student->born_date);
        $dateInterval = $dateTimeInTheFuture->diff($currentDateTime);
        $age = $dateInterval->y." Tahun ".$dateInterval->m." Bulan";
        return view('admin.student.show',compact('student','age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $classrooms = Classroom::all();
        $blood_type = ['Tidak Tahu','A','B','AB','O'];
        $gender = ['Laki-laki','Perempuan'];
        return view('admin.student.form',compact('student','classrooms','blood_type','gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('siswa.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('siswa.index')->with('success','Berhasil menghapus data');
    }
}
