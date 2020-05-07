<?php

use Illuminate\Database\Seeder;
use App\CategoryUser;

class CategoryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = ['admin','guru','umum'];
        foreach($lists as $list){
            CategoryUser::create([
                'name'=>$list
            ]);
        }

    }
}
