<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Health;
use App\Measurement;
use App\Student;
use Illuminate\Http\Request;
use DateTime;
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
        if(request()->ajax()){
            $data = Student::with('classroom')->get();
            return datatables()->of($data)
                    ->editColumn('name', function($data){
                        $name = '<a href="'.route("student.find.health", $data->id).'">'.$data->name.'</a>';
                        return $name;
                    })
                    ->addColumn('classroom', function($data){
                        return empty($data->classroom->name) ? "Belum Diatur" : $data->classroom->name;
                    })
                    ->rawColumns(['classroom','name'])
                    ->make(true);
        }
        return view('admin.health.index_student');
    }

    public function yajra(Request $request)
    {
        if(request()->ajax()){
            $data = Student::with('classroom');
            return datatables()->of($data)
                    ->editColumn('name', function($data){
                        $name = '<a href="'.route("student.find.health", $data->id).'">'.$data->name.'</a>';
                        return $name;
                    })
                    ->addColumn('action', function($data){
                        $button = '<button type="button"
                        name="edit" id="'.$data->id.'"
                        class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button"
                        name="delete" id="'.$data->id.'"
                        class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action','name'])
                    ->make(true);
            
        }
        return view('admin.health.index_student');
    }

    public function StudentFindHealth($id)
    {
        $records = Health::where('student_id','=',$id)->get();
        $student = Student::findOrFail($id);
        if(request()->ajax()){
            return datatables()->of($records)
                    ->editColumn('name', function($records){
                        $name = '<a href="'.route("student.find.health", $records->id).'">'.$records->name.'</a>';
                        return $name;
                    })
                    ->addColumn('action', function($records){
                        $button = '<button type="button"
                        name="edit" id="'.$records->id.'"
                        class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button"
                        name="delete" id="'.$records->id.'"
                        class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action','name'])
                    ->make(true);
            
        }
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
        $currentDateTime = new DateTime;
            $dateTimeInTheFuture = new DateTime($student->born_date);
            $dateInterval = $dateTimeInTheFuture->diff($currentDateTime);
            $ageYear = $dateInterval->y;
            $ageMonth = $dateInterval->m;
            $totalbulan = 12 * $dateInterval->y + $dateInterval->m;
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
            'bmi',
            'ageYear',
            'ageMonth'
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
        $record = Health::with('condition')->with('measurement')->findOrFail($id);
        
        $student = Student::select('name')->findOrFail($record->student_id);
        return view('admin.health.show',compact('record','student'));
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
        $health =  Health::findOrFail($id);
        $student = Student::findOrFail($health->student_id);
        $health->delete(); 
        return redirect()->route('student.find.health',$student->id)->with(['success'=>'Berhasil menghapus data','data'=>$student]);
    } 

    public function searchStudent(Request $request)
    {
        $students = Student::search($request->name)->get();
        $search = $request->name;
        return view('admin.health.index_student',compact('students','search'));
    }
}
