<?php

use Illuminate\Database\Seeder;
use App\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = ['A','B','C'];
        foreach($lists as $list){
            Classroom::create([
                'name'=>$list
            ]);
        }
    }
}
