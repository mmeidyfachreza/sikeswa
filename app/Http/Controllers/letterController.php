<?php

namespace App\Http\Controllers;

use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class letterController extends Controller
{
    public function indexSRKAS()
    {
        //surat rujukan kesehatan anak sekolah
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
                        // $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        // <a href="'.route("letter.print.srkas",$data->id).'"class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>';
                        $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="select-student btn btn-primary" id="'.$data->id.'" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i></button>';
                        return $button;
                    })
                    ->rawColumns(['action','classroom','nis'])
                    ->make(true);
        }
        return view('admin.letter.indexSRKAS');
    }
    
    public function indexRujukBlk()
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
                        // $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        // <a href="'.route("letter.print.srkas",$data->id).'"class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>';
                        $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="select-student btn btn-primary" id="'.$data->id.'" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i></button>';
                        return $button;
                    })
                    ->rawColumns(['action','classroom','nis'])
                    ->make(true);
        }
        return view('admin.letter.indexRujukBlk');
    }

    public function indexRujukUKS()
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
                        // $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        // <a href="'.route("letter.print.srkas",$data->id).'"class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>';
                        $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="select-student btn btn-primary" id="'.$data->id.'" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i></button>';
                        return $button;
                    })
                    ->rawColumns(['action','classroom','nis'])
                    ->make(true);
        }
        return view('admin.letter.indexRujukUKS');
    }
    
    public function printSRKAS(Request $request)
    {
        # code...
        // $rules = [
        //     'Student' => 'required', 
        //     'deskripsi' => 'required', 
        // ];
        // $customMessages = [
        //     'Student.required' => 'Student belum dipilih', 
        //     'deskripsi.required' => 'Keluhan/diagnosa harus diisi', 
        // ];
        // $this->validate($request, $rules, $customMessages);
        $student = Student::find($request->studentId);
        
        $umur = Carbon::parse($student->born_date)->age;
        return view('admin.letter.printSRKAS',compact('student','umur','request'));
        
        // $Student = Student::find(1);
        // $umur = Carbon::parse($Student->tgl_lahir)->age;
        // $pdf = PDF::loadview('admin.surat_rujukan.cetakRujuk',compact('Student','umur'));
        // return $pdf->stream();
    }
    
    public function printRujukBlk(Request $request)
    {
        // $rules = [
        //     'Student' => 'required', 
        //     'deskripsi' => 'required', 
        // ];
        // $customMessages = [
        //     'Student.required' => 'Student belum dipilih', 
        //     'deskripsi.required' => 'Pengobatan/Tindakan harus diisi', 
        // ];
        // $this->validate($request, $rules, $customMessages);
        $student = Student::find($request->studentId);
        $umur = Carbon::parse($student->born_date)->age;
        return view('admin.letter.printRujukBlk',compact('student','umur','request'));
    }

    public function printRujukUKS(Request $request)
    {
        // $rules = [
        //     'Student' => 'required', 
        //     'keluhan' => 'required',
        //     'tindakan' => 'required',
        // ];
        // $customMessages = [
        //     'Student.required' => 'Student belum dipilih', 
        //     'keluhan.required' => 'Keluhan harus diisi', 
        //     'tindakan.required' => 'Pengobatan/Tindakan harus diisi', 
        // ];
        // $this->validate($request, $rules, $customMessages);
        $student = Student::find($request->studentId);
        $umur = Carbon::parse($student->born_date)->age;
        return view('admin.letter.printRujukUKS',compact('student','umur','request'));
    }
}
