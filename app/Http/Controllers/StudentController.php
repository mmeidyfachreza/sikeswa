<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Student;
use Crypt;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Imports\StudentsImport;

class StudentController extends Controller
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
                    ->addIndexColumn()
                    ->editColumn('nis', function($data){
                        return empty($data->nis) ? "Belum Diatur" : $data->nis;
                    })
                    ->addColumn('classroom', function($data){
                        return empty($data->classroom->name) ? "Belum Diatur" : $data->classroom->name;
                    })
                    ->addColumn('action', function($data){
                        $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        <a href="'.route("siswa.edit",$data->id).'"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i
                        class="fa fa-trash"></i></a>
                        <a href="'.route("siswa.show",$data->id).'"class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                    </div>';
                        return $button;
                    })
                    ->rawColumns(['action','classroom','nis'])
                    ->make(true);
        }
        return view('admin.student.index');
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
        if ($request->hasFile('avatar') && $request->has('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(354,472)->save(public_path('/uploads/avatars/' . $filename));
            $student = Student::create($request->all());
            $student->avatar = $filename;
            $student->save();
            return redirect()->route('siswa.index')->with('success','Berhasil menambah data');
        }
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
        if ($request->hasFile('avatar')) {
            $pathToFile = public_path('uploads/avatars/' . $student->avatar);
            File::delete($pathToFile);
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(354,472)->save(public_path('/uploads/avatars/' . $filename));
            $student->avatar =  $filename;
        }
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
        Student::find($id)->delete();
        return response()->json(['success'=>'Siswa deleted successfully.']);
    }

    public function export()
    {
        return (new FastExcel(Student::with('classroom')->get()))->download('users.xlsx', function ($data) {
            return [
                'NIS' => ($data->nis? $data->nis : " "),
                'Kelas' => ($data->classroom? $data->classroom->name : " "),
                'Nama' => $data->name,
                'Tanggal Lahir' => $data->born_date,
                'Tempat Lahir' => $data->born_city,
                'Alamat' => $data->address,
                'Jenis Kelamin' => $data->gender,
                'Golongan Darah' => $data->blood_type,
                'Asal Sekolah' => $data->school_from,
                'Nama Ayah' => $data->father_name,
                'Nama Ibu' => $data->mother_name,
                'Wali' => $data->guardian,
                'No BPJS' => $data->no_bpjs,
                'FASKES BPJS' => $data->faskes_bpjs,
            ];
        });
    }

    public function import(Request $request)
    {
        Excel::import(new StudentsImport(), $request->file('studentImport'));

        echo "success";
    }
}
