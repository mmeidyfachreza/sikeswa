<?php

namespace App\Http\Controllers\Api;

use App\HealthOutcomes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HealthOutItem;

class HealthOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HealthOutItem::collection(HealthOutcomes::all()->where('type','=','gigi'));
    }

    public function index2()
    {
        $a = HealthOutItem::collection(HealthOutcomes::all()->where('type','=','gigi'));
        $b = HealthOutItem::collection(HealthOutcomes::all()->where('type','=','rambut'));
        $c = HealthOutItem::collection(HealthOutcomes::all()->where('type','=','kuku'));
        $d = HealthOutItem::collection(HealthOutcomes::all()->where('type','=','telinga'));
        $e = HealthOutItem::collection(HealthOutcomes::all()->where('type','=','kulit'));
        $return_array = compact('a','b','c','d','e');
        return json_encode($return_array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthOutcomes  $healthOutcomes
     * @return \Illuminate\Http\Response
     */
    public function show(HealthOutcomes $healthOutcomes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthOutcomes  $healthOutcomes
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthOutcomes $healthOutcomes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthOutcomes  $healthOutcomes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthOutcomes $healthOutcomes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthOutcomes  $healthOutcomes
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthOutcomes $healthOutcomes)
    {
        //
    }
}
