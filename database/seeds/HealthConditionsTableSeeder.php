<?php

use Illuminate\Database\Seeder;
use App\Condition;

class HealthConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = [
            'gigi'=>[
                'Bersih',
                'Tidak Bersih'
            ],
            'rambut'=>[
                'Panjang',
                'Sedang',
                'Pendek'
            ],
            'kuku'=>[
                'Bersih',
                'Tidak Bersih'
            ],
            'telinga'=>[
                'Bersih',
                'Tidak Bersih'
            ],
            'kulit'=>[
                'Bersih',
                'Tidak Ada Bercak',
                'Tidak Ada Loreng',
                'Terdapat Bercak',
                'Luka Loreng',
                'Bintik Merah',
            ],
        ];
        foreach($lists as $key => $list){
            foreach ($list as $key2 => $value) {
                Condition::create([
                    'description'=>$value,
                    'type'=>$key
                ]);
            }
        }
    }
}
