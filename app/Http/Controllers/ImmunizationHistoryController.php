<?php

namespace App\Http\Controllers;

use App\Immunization;
use App\ImmunizationHistory;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImmunizationHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.records.immunization.index_student',compact('students'));
    }

    public function StudentFindImmune($id)
    {
        $records = ImmunizationHistory::where('student_id','=',$id)->get();
        $student = Student::findOrFail($id);
        return view('admin.records.immunization.index3',compact('records','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $immunizations = Immunization::all();
        $student = Student::findOrFail($id);
        return view('admin.records.immunization.form',compact('immunizations','student'));
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
        DB::transaction(function () use ($request,$student) {


            $newHist = ImmunizationHistory::create([
                'date' => $request->date,
                'age_month' => $request->age_year,
                'age_year' => $request->age_month,
                'student_id' => $student->id
            ]);

            $immunizations = Immunization::all();
            foreach ($immunizations as $value) {
                $name = $value->name;
                $newHist->immunization()->attach($value->id,['status'=>$request->$name]);
            }

        });
        return redirect()->route('student.find.immune',$request->student_id)->with(['success'=>'Berhasil menambah data','data'=>$student]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImmunizationHistory  $immunizationHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ImmunizationHistory $immunizationHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImmunizationHistory  $immunizationHistory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = ImmunizationHistory::findOrFail($id);
        $student = Student::findOrFail($record->student_id);
        return view('admin.records.immunization.form',compact('record','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImmunizationHistory  $immunizationHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $immune_hists = ImmunizationHistory::findOrFail($id);
        $immunizations = Immunization::all();
        foreach ($immunizations as $value) {
            $name = $value->name;
            // if ($request->$name==Null) {
            //     continue;
            // }
            $immune_hists->immunization()->syncWithoutDetaching([$value->id => ['status' => $request->$name]]);
        }
        $student = Student::findOrFail($immune_hists->student_id);
        return redirect()->route('student.find.immune',$immune_hists->student_id)->with(['success'=>'Berhasil merubah data','data'=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImmunizationHistory  $immunizationHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = ImmunizationHistory::findOrFail($id);
        $history->delete();

    }

    public function SearchStudent(Request $request)
    {
        $students = Student::search($request->name)->get();
        $search = $request->name;
        return view('admin.records.immunization.index_student',compact('students','search'));
    }
}
