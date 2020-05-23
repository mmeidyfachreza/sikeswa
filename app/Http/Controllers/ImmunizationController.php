<?php

namespace App\Http\Controllers;

use App\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immunizations = Immunization::all();
        return view('admin.immunization.index',compact('immunizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.immunization.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Immunization::create($request->all());
        return redirect()->route('imunisasi.index')->with('success','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $immunization = Immunization::findOrFail($id);
       return view('admin.immunization.show',compact('immunization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $immunization = Immunization::findOrFail($id);
        return view('admin.immunization.show',compact('immunization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Immunization::update($request->all());
        return redirect()->route('imunisasi.index')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Immunization::findOrFind($id);
        return redirect()->route('imunisasi.index')->with('success','Berhasil menghapus data');
    }
}
