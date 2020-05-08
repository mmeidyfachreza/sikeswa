<?php

namespace App\Http\Controllers;

use App\Health2;
use App\HealthCondition;
use App\HealthOutcomes;
use App\Student;
use DateTime;
use DB;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.health.index_student',compact('students'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function StudentFindHealth($id)
    {
        $healths = Health2::where('student_id','=',$id)->get();
        $student = Student::findOrFail($id);
        return view('admin.health.index3',compact('healths','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $student = Student::findOrFail($id);
        $tooth_conds = HealthCondition::where('type','=','gigi')->get();
        $hair_conds = HealthCondition::where('type','=','rambut')->get();
        $nail_conds = HealthCondition::where('type','=','kuku')->get();
        $ear_conds = HealthCondition::where('type','=','telinga')->get();
        $skin_conds = HealthCondition::where('type','=','kulit')->get();

        $tooth_outs = HealthOutcomes::where('type','=','gigi')->get();
        $hair_outs = HealthOutcomes::where('type','=','rambut')->get();
        $nail_outs = HealthOutcomes::where('type','=','kuku')->get();
        $ear_outs = HealthOutcomes::where('type','=','telinga')->get();
        $skin_outs = HealthOutcomes::where('type','=','kulit')->get();

        $currentDateTime = new DateTime();
        $dateTimeInTheFuture = new DateTime($student->born_date);
        $dateInterval = $dateTimeInTheFuture->diff($currentDateTime);
        $age = $dateInterval->y." Tahun ".$dateInterval->m." Bulan";
        $month = 12 * $dateInterval->y + $dateInterval->m;
        return view('admin.health.form',compact(
            'age',
            'student',
            'month',
            'tooth_conds',
            'hair_conds',
            'nail_conds',
            'ear_conds',
            'skin_conds',
            'tooth_outs',
            'hair_outs',
            'nail_outs',
            'ear_outs',
            'skin_outs',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Health2::create($request->all());
        $student = Student::findOrFail($request->student_id);
        return redirect()->route('student.find.health',$request->student_id)->with(['success'=>'Berhasil menambah data','data'=>$student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function show($health)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function edit($health)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$health)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Health  $health
     * @return \Illuminate\Http\Response
     */
    public function destroy($health)
    {
        //
    }
}
