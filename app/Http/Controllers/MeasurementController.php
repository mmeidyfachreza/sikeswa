<?php

namespace App\Http\Controllers;

use App\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurements = Measurement::all();
        return view('admin.measurement.index',compact('measurements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = ['TB','BB','IMT'];
        return view('admin.measurement.form',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Measurement::create($request->all());
        return redirect()->route('status-gizi.index')->with('success','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(Measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Measurement::findOrFail($id);
        $type = ['TB','BB','IMT'];
        return view('admin.measurement.form',compact('record','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Measurement::findOrFail($id);
        $record->update($request->all());
        return redirect()->route('status-gizi.index')->with('success','Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Measurement::findOrFail($id)->delete();
        return redirect()->route('status-gizi.index')->with('success','Berhasil menghapus data');
    }
}
