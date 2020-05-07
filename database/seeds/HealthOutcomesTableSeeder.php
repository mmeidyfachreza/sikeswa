<?php

use Illuminate\Database\Seeder;
use App\HealthOutcomes;

class HealthOutcomesTableSeeder extends Seeder
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
                'sehat',
                'tidak sehat'
            ],
            'rambut'=>[
                'sehat',
                'tidak sehat'
            ],
            'kuku'=>[
                'sehat',
                'tidak sehat'
            ],
            'telinga'=>[
                'sehat',
                'tidak sehat'
            ],
            'kulit'=>[
                'sehat',
                'tidak sehat'
            ],
        ];
        foreach($lists as $key => $list){
            foreach ($list as $key2 => $value) {
                HealthOutcomes::create([
                    'description'=>$value,
                    'type'=>$key
                ]);
            }
        }
    }
}
