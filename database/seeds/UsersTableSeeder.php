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
        User::create([
            'no_identity'=>'6653625335',
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'phone_number'=>'085391082420',
            'position'=>'admin',
            'user_type'=>'admin',
            'password'=>'admin']);
    }
}
