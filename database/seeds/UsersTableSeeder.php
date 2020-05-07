<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'admin', 'email'=>'admin@admin.com', 'phone_number'=>'085391082420', 'category_user_id'=>'1', 'password'=>'admin']);
    }
}
