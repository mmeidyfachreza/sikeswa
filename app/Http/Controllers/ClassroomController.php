<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $data = Classroom::all();
            return datatables()->of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $button = '<div class="btn-group" role="group" aria-label="Basic example">
                        <a href="'.route("kelas.edit",$data->id).'"class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i
                        class="fa fa-trash"></i></a>
                        <a href="'.route("kelas.show",$data->id).'"class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                    </div';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.classroom.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classroom.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Classroom::create($request->all());
        return redirect()->route('kelas.index')->with('success','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classroom.show',compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classroom.form',compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());
        return redirect()->route('kelas.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classroom::find($id)->delete();
        return response()->json(['success'=>'Siswa deleted successfully.']);
    }
}
