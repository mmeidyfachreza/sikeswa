<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Measurement as ResourcesMeasurement;
use App\Measurement;

class MeasurementsController extends Controller
{
    public function height(Request $request)
    {
        // return ResourcesMeasurement::collection(Measurement::where('type','=','tinggi badan')->get());
        $height_stat = "Tidak Diketahui";
        $measure = Measurement::where('type','=','tinggi badan')->get();

        foreach ($measure as $data) {
            if ($request->height > $data->min_value && $request->height < $data->max_value) {
                $height_stat = $data->description;
            }
        }
        $bmi_stat = "Tidak Diketahui";
        $bmi = Measurement::where('type','=','bmi')->get();
        foreach ($bmi as $data) {
            if ((double)$request->bmi > $data->min_value && (double)$request->bmi < $data->max_value) {
                $bmi_stat = $data->description;
            }
        }
        return response()->json([
            'height'=>$height_stat,
            'bmi'=>$bmi_stat,
        ]);
    }

    public function weight(Request $request)
    {
        // return ResourcesMeasurement::collection(Measurement::where('type','=','tinggi badan')->get());
        $weight_stat = "Tidak Diketahui";
        $measure = Measurement::where('type','=','berat badan')->get();
        foreach ($measure as $data) {
            if ($request->weight > $data->min_value && $request->weight < $data->max_value) {
                $weight_stat = $data->description;
            }
        }
        $bmi_stat = "Tidak Diketahui";
        $bmi = Measurement::where('type','=','bmi')->get();
        foreach ($bmi as $data) {
            if ((double)$request->bmi > $data->min_value && (double)$request->bmi < $data->max_value) {
                $bmi_stat = $data->description;
            }
        }
        return response()->json([
            'weight'=>$weight_stat,
            'bmi'=>$bmi_stat,
        ]);
    }
}
