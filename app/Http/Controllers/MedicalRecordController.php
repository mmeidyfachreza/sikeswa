<?php

namespace App\Http\Controllers;

use App\BrainDomination;
use App\HealthScreening;
use App\LearningModality;
use App\MedicalRecord;
use App\MentalHealth;
use App\MentalHealth2;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $data = Student::all();
            return datatables()->of($data)
                    ->editColumn('name', function($data){
                        $name = '<a href="'.route("student.find.record", $data->nis).'">'.$data->name.'</a>';
                        return $name;
                    })
                    ->rawColumns(['name'])
                    ->make(true);
        }
        return view('admin.medical_record.index_student');
    }

    public function indexMedRec($id)
    {
        $records = MedicalRecord::where('student_nis','=',$id)->get();
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
        $mentalHealths2 = MentalHealth2::all();
        $learningModalities = LearningModality::all();
        $brainDominations = BrainDomination::all();

        return view('admin.medical_record.form',compact('student','mentalHealths','mentalHealths2','learningModalities','brainDominations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::findOrFail($request->student_nis);
        $medicalRecord = MedicalRecord::create($request->all());
        $a = HealthScreening::all();
        $mh = MentalHealth::all();
        // $mh2 = MentalHealth2::all();
        $lm = LearningModality::all();
        $bd = BrainDomination::all();
        $x = 1;
        foreach ($a as $item) {
            //collect all inserted record IDs
            $a_id_array[$item->id] = [
                'choice' => $request->a[$x],
                'description' => $request->ket_a[$x++]
            ];
        }
        $x = 1;
        foreach ($mh as $item) {
            //collect all inserted record IDs
            $mh_id_array[$item->id] = ['score' => $request->mh[$x++]];
        }
        // $x = 1;
        // foreach ($mh2 as $item) {
        //     //collect all inserted record IDs
        //     $mh2_id_array[$item->id] = ['score' => $request->mh2[$x++]];
        // }
        $x = 1;
        foreach ($lm as $item) {
            //collect all inserted record IDs
            $lm_id_array[$item->id] = ['score' => $request->lm[$x++]];
        }
        $x = 1;
        foreach ($bd as $item) {
            //collect all inserted record IDs
            $bd_id_array[$item->id] = ['score' => $request->bd[$x++]];
        }

        DB::beginTransaction();
        try {
            $medicalRecord->mentalHealth()->attach($mh_id_array);
            // $medicalRecord->mentalHealth2()->attach($mh2_id_array);
            $medicalRecord->learningModality()->attach($lm_id_array);
            $medicalRecord->brainDomination()->attach($bd_id_array);
            $medicalRecord->healthScreening()->attach($a_id_array);
            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('rekam-medik.create')->withErrors(['message'=>$e->getMessage()]);
        }

        return redirect()->route('student.find.record',$request->student_nis)->with(['success'=>'Berhasil menambah data','data'=>$student]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = MedicalRecord::with('mentalHealth')->with('mentalHealth2')->with('brainDomination')->with('learningModality')->with('healthScreening')->findOrFail($id);
        $student = Student::findOrFail($show->student_nis);

        $mentalHealths = MentalHealth::all();
        $mentalHealths2 = MentalHealth2::all();
        $learningModalities = LearningModality::all();
        $brainDominations = BrainDomination::all();

        $choice1 = ['ya','tidak'];
        $choice2 = ['ya','tidak','1 kali','lebih dari 1 kali'];
        $choice3 = ['ya','tidak','tidak tahu'];
        $choice4 = ['selalu','kadang-kadang','tidak pernah'];
        $choice5 = ['ada','kadang-kadang','tidak ada'];

        return view('admin.medical_record.form',compact(
            'show',
            'student',
            'mentalHealths',
            'mentalHealths2',
            'learningModalities',
            'brainDominations',
            'choice1',
            'choice2',
            'choice3',
            'choice4',
            'choice5',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = MedicalRecord::with('mentalHealth')->with('mentalHealth2')->with('brainDomination')->with('learningModality')->with('healthScreening')->findOrFail($id);
        $student = Student::findOrFail($record->student_nis);

        $mentalHealths = MentalHealth::all();
        $mentalHealths2 = MentalHealth2::all();
        $learningModalities = LearningModality::all();
        $brainDominations = BrainDomination::all();

        $choice1 = ['ya','tidak'];
        $choice2 = ['ya','tidak','1 kali','lebih dari 1 kali'];
        $choice3 = ['ya','tidak','tidak tahu'];
        $choice4 = ['selalu','kadang-kadang','tidak pernah'];
        $choice5 = ['ada','kadang-kadang','tidak ada'];


        return view('admin.medical_record.form',compact(
            'record',
            'student',
            'mentalHealths',
            'mentalHealths2',
            'learningModalities',
            'brainDominations',
            'choice1',
            'choice2',
            'choice3',
            'choice4',
            'choice5',
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
        $student = Student::findOrFail($request->student_nis);
        $medicalRecord = MedicalRecord::findOrFail($id);
        $medicalRecord->update($request->all());
        $a = HealthScreening::all();
        $mh = MentalHealth::all();
        $mh2 = MentalHealth2::all();
        $lm = LearningModality::all();
        $bd = BrainDomination::all();
        $x = 1;
        foreach ($a as $item) {
            //collect all inserted record IDs
            $a_id_array[$item->id] = [
                'choice' => $request->a[$x],
                'description' => $request->ket_a[$x++]
            ];
        }
        $x = 1;
        foreach ($mh as $item) {
            //collect all inserted record IDs
            $mh_id_array[$item->id] = ['score' => $request->mh[$x++]];
        }
        $x = 1;
        foreach ($mh2 as $item) {
            //collect all inserted record IDs
            $mh2_id_array[$item->id] = ['score' => $request->mh2[$x++]];
        }
        $x = 1;
        foreach ($lm as $item) {
            //collect all inserted record IDs
            $lm_id_array[$item->id] = ['score' => $request->lm[$x++]];
        }
        $x = 1;
        foreach ($bd as $item) {
            //collect all inserted record IDs
            $bd_id_array[$item->id] = ['score' => $request->bd[$x++]];
        }

        $medicalRecord->mentalHealth()->syncWithoutDetaching($mh_id_array);
        $medicalRecord->mentalHealth2()->syncWithoutDetaching($mh2_id_array);
        $medicalRecord->learningModality()->syncWithoutDetaching($lm_id_array);
        $medicalRecord->brainDomination()->syncWithoutDetaching($bd_id_array);
        $medicalRecord->healthScreening()->syncWithoutDetaching($a_id_array);
        return redirect()->route('student.find.record',$request->student_nis)->with(['success'=>'Berhasil merubah data','data'=>$student]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MedicalRecord::findOrFail($id)->delete();
        return redirect()->route('rekam-medik.index')->with('success','Berhasil menghapus data');
    }

    public function searchStudent(Request $request)
    {
        $students = Student::search($request->name)->get();
        $search = $request->name;
        return view('admin.medical_record.index_student',compact('students','search'));
    }
}
