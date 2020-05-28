<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Health;
use App\Measurement;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function StudentFindHealth($id)
    {
        $records = Health::where('student_id','=',$id)->get();
        $student = Student::findOrFail($id);
        return view('admin.health.index3',compact('records','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $skin = Condition::where('type','=','kulit')->get();
        $tooth = Condition::where('type','=','gigi')->get();
        $nail = Condition::where('type','=','kuku')->get();
        $hair = Condition::where('type','=','rambut')->get();
        $ear = Condition::where('type','=','telinga')->get();
        $bmi = Measurement::where('type','=','IMT')->get();
        $height = Measurement::where('type','=','TB')->get();
        $weight = Measurement::where('type','=','BB')->get();
        $conditions = Condition::all();
        $student = Student::findOrFail($id);
        return view('admin.health.form',compact(
            'conditions',
            'student',
            'skin',
            'tooth',
            'nail',
            'hair',
            'ear',
            'height',
            'weight',
            'bmi'
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

        $student = Student::findOrFail($request->student_id);
        $health = Health::create($request->all());
        $health->measurement()->attach([
            $request->s_height,
            $request->s_weight,
            $request->s_bmi,
            ]);
        $health->condition()->attach([
            $request->skin,
            $request->tooth,
            $request->nail,
            $request->hair,
            $request->ear,
            ]);
        return redirect()->route('student.find.health',$request->student_id)->with(['success'=>'Berhasil menambah data','data'=>$student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Health::with('condition')->with('measurement')->findOrFail($id);
        $student = Student::findOrFail($record->student_id);

        $skin = Condition::where('type','=','kulit')->get();
        $tooth = Condition::where('type','=','gigi')->get();
        $nail = Condition::where('type','=','kuku')->get();
        $hair = Condition::where('type','=','rambut')->get();
        $ear = Condition::where('type','=','telinga')->get();
        $bmi = Measurement::where('type','=','IMT')->get();
        $height = Measurement::where('type','=','TB')->get();
        $weight = Measurement::where('type','=','BB')->get();
        return view('admin.health.form',compact(
            'record',
            'student',
            'skin',
            'tooth',
            'nail',
            'hair',
            'ear',
            'bmi',
            'weight',
            'height'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($request->student_id);
        $health = Health::findOrFail($id);
        $health->update($request->all());
        $health->measurement()->sync([
            $request->s_height,
            $request->s_weight,
            $request->s_bmi,
            ]);
        $health->condition()->sync([
            $request->skin,
            $request->tooth,
            $request->nail,
            $request->hair,
            $request->ear,
            ]);
        return redirect()->route('student.find.health',$request->student_id)->with(['success'=>'Berhasil merubah data','data'=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Health::findOrFail($id);
        return redirect()->route('kesehatan.index')->with('success','Berhasil menghapus data');
    }

    public function searchStudent(Request $request)
    {
        $students = Student::search($request->name)->get();
        $search = $request->name;
        return view('admin.health.index_student',compact('students','search'));
    }
}
