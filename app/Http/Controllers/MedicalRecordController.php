<?php

namespace App\Http\Controllers;

use App\BrainDomination;
use App\LearningModality;
use App\MedicalRecord;
use App\MentalHealth;
use App\Student;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.medical_record.index_student',compact('students'));
    }

    public function StudentFindRecord($id)
    {
        $records = MedicalRecord::where('student_id','=',$id)->get();
        $student = Student::findOrFail($id);
        return view('admin.medical_record.index3',compact('records','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $student = Student::findOrFail($id);
        $mentalHealths = MentalHealth::all();
        $learningModalities = LearningModality::all();
        $brainDominations = BrainDomination::all();

        return view('admin.medical_record.form',compact('student','mentalHealths','learningModalities','brainDominations'));
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
        $medicalRecord = MedicalRecord::create($request->all());
        $mh = MentalHealth::all();
        $lm = LearningModality::all();
        $bd = BrainDomination::all();
        $x = 2;
        foreach ($mh as $item) {
            //collect all inserted record IDs
            $mh_id_array[$item->id] = ['score' => $request->mh[$x++]];
        }
        $x = 2;
        foreach ($lm as $item) {
            //collect all inserted record IDs
            $lm_id_array[$item->id] = ['score' => $request->lm[$x++]];
        }
        $x = 2;
        foreach ($bd as $item) {
            //collect all inserted record IDs
            $bd_id_array[$item->id] = ['score' => $request->bd[$x++]];
        }

        $medicalRecord->mentalHealth()->attach($mh_id_array);
        $medicalRecord->learningModality()->attach($lm_id_array);
        $medicalRecord->brainDomination()->attach($bd_id_array);

        return redirect()->route('student.find.record',$request->student_id)->with(['success'=>'Berhasil menambah data','data'=>$student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = MedicalRecord::with('mentalHealth')->with('brainDomination')->with('learningModality')->findOrFail($id);
        $student = Student::findOrFail($record->student_id);

        $mentalHealths = MentalHealth::all();
        $learningModalities = LearningModality::all();
        $brainDominations = BrainDomination::all();

        return view('admin.medical_record.form',compact(
            'record',
            'student',
            'mentalHealths',
            'learningModalities',
            'brainDominations',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($request->student_id);
        $medicalRecord = MedicalRecord::findOrFail($id);
        $medicalRecord->update($request->all());
        $mh = MentalHealth::all();
        $lm = LearningModality::all();
        $bd = BrainDomination::all();
        $x = 2;
        foreach ($mh as $item) {
            //collect all inserted record IDs
            $mh_id_array[$item->id] = ['score' => $request->mh[$x++]];
        }
        $x = 2;
        foreach ($lm as $item) {
            //collect all inserted record IDs
            $lm_id_array[$item->id] = ['score' => $request->lm[$x++]];
        }
        $x = 2;
        foreach ($bd as $item) {
            //collect all inserted record IDs
            $bd_id_array[$item->id] = ['score' => $request->bd[$x++]];
        }

        $medicalRecord->mentalHealth()->syncWithoutDetaching($mh_id_array);
        $medicalRecord->learningModality()->syncWithoutDetaching($lm_id_array);
        $medicalRecord->brainDomination()->syncWithoutDetaching($bd_id_array);
        return redirect()->route('student.find.record',$request->student_id)->with(['success'=>'Berhasil merubah data','data'=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MedicalRecord::findOrFail($id);
        return redirect()->route('rekam-medik.index')->with('success','Berhasil menghapus data');
    }

    public function searchStudent(Request $request)
    {
        $students = Student::search($request->name)->get();
        $search = $request->name;
        return view('admin.medical_record.index_student',compact('students','search'));
    }
}
