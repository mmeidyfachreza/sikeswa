<?php

namespace App\Http\Controllers;

use App\Health;
use App\Student;
use Carbon\Carbon;
use DB;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $laki = array('laki' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_nis')
        ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Laki-laki')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray()) ;
        $perempuan = array('perempuan' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_nis')
        ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Perempuan')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray());
        $data = array_merge($laki,$perempuan);
            return response($data);
        }
        $total_student = Student::count();
        $total_boy = Student::where('gender','=','Laki-laki')->count();
        $total_girl = Student::where('gender','=','Perempuan')->count();
        return view('admin.home',compact('total_student','total_boy','total_girl'));
    }

    public function quick_access()
    {
        $students = Student::all();
        return view('tested',compact('students'));
    }

    public function tes()
    {
        // $data = DB::table('healths')
        // ->select(DB::raw('avg(height) as count'))
        // ->whereMonth('date','06')
        // ->get();
        // foreach ($data as $value) {
        //     echo $value->height;
        //     echo '</br>';
        // }
        $laki = array('laki' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_nis')
    ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Laki-laki')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray()) ;
        $perempuan = array('perempuan' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_nis')
        ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Perempuan')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray());
        // $laki = DB::table('healths')
        //     ->where('gender','=','Laki-laki')
        //     ->select(DB::raw('avg(height) as laki, DATE(date) month'))
        //     ->groupBy('month')
        //     ->get()->toArray();
        // $perempuan = DB::table('healths')
        //     ->where('gender','=','Perempuan')
        //     ->select(DB::raw('avg(height) as perempuan, DATE(date) month'))
        //     ->groupBy('month')
        //     ->get()->toArray();
                $data = array_merge($laki,$perempuan);

        dd($laki);
    }

    public function tes2()
    {
        $faker = Faker::create();
        $date = '2020-06-01';
        $students = Student::all('id')->toArray();
        foreach ($students as $value) {
            $health = new Health;
            $health->date = $date;
            $health->student_nis = $value['id'];
            $health->age_year = $faker->numberBetween($min = 6, $max = 10);
            $health->age_month = $faker->numberBetween($min = 0, $max = 12);
            $health->height = $faker->numberBetween($min = 90, $max = 120);
            $health->weight = $faker->numberBetween($min = 45, $max = 80);
            $hasil1 = $health->height / 100;
            $bmi = $health->weight / ($hasil1 * $hasil1);
            $health->bmi = round($bmi,2);
            $health->save();
        }
        echo "done!! ".$date;
    }

    public function indexkk()
    {
        if(request()->ajax()){
            $data = Student::all();
            return datatables()->of($data)
                    ->addIndexColumn()
                    ->editColumn('nis', function($data){
                        return empty($data->nis) ? "Belum Diatur" : $data->nis;
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
        $tahun = Health::all()->groupBy(function($d) {
            return (int)\Carbon\Carbon::parse($d->date)->format('Y');
        });
        return view('admin.kartu_kontrol.index',compact('tahun'));
    }

    public function cetak(Request $request)
    {
        $month = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        //dd($month[0]);
        $siswa = Student::find($request->siswa);
        // $bulan = $student->pengukuran->groupBy(function($d) {
            //     return (int)\Carbon\Carbon::parse($d->tgl_pengukuran)->format('m');
            //     })->toArray();
        $tahun = $request->tahun;
        // $bulan = $siswa->pengukuranYear((int)$request->tahun)->groupBy(function($d) {
        //     return (int)\Carbon\Carbon::parse($d->date)->format('m');
        // });
        $bulan = Health::with('condition')->where('student_nis','=',$siswa->id)->get()->groupBy(function($d) {
            return (int)\Carbon\Carbon::parse($d->date)->format('m');
        });
        // dd($bulan[1][0]->date);
        foreach ($bulan as $key => $value) {

            echo (int)\Carbon\Carbon::parse($value->first()->date)->format('m');
        }
        return view('admin.kartu_kontrol.cetak',compact('siswa','bulan','tahun','month'));
    }
}
