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
        ->join('healths', 'students.id', '=', 'healths.student_id')
        ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Laki-laki')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray()) ;
        $perempuan = array('perempuan' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_id')
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
        ->join('healths', 'students.id', '=', 'healths.student_id')
    ->select(DB::raw('avg(healths.height) as avg'))
        ->where('students.gender','=','Laki-laki')
        ->groupBy(DB::raw("MONTH(healths.date)"))
        ->get()->toArray()) ;
        $perempuan = array('perempuan' => DB::table('students')
        ->join('healths', 'students.id', '=', 'healths.student_id')
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
        dd($perempuan);
    }

    public function tes2()
    {
        $faker = Faker::create();
        $date = '2020-06-01';
        $students = Student::all('id')->toArray();
        foreach ($students as $value) {
            $health = new Health;
            $health->date = $date;
            $health->student_id = $value['id'];
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
}
