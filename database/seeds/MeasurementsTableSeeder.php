<?php

use Illuminate\Database\Seeder;
use App\Measurement;

class MeasurementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = [
            'TB'=>[
                ['Sangat Pendek',1,2],
                ['Pendek',3,4],
                ['Normal',5,6],
                ['Tinggi',7,8],
            ],
            'BB'=>[
                ['Gizi Buruk',1,2],
                ['Gizi Kurang',3,4],
                ['Gizi Baik',5,6],
                ['Gizi Lebih',7,8],
            ],
            'IMT'=>[
                ['Sangat Kurus',1,2],
                ['Kurus',3,4],
                ['Normal',5,6],
                ['Gemuk',7,8],
                ['Obesitas',9,10],
            ],

        ];
        foreach($lists as $key => $list){
            foreach ($list as $key2 => $value) {
                Measurement::create([
                    'description'=>$value[0],
                    'min_value'=>$value[1],
                    'max_value'=>$value[2],
                    'type'=>$key
                ]);
            }
        }
    }
}
