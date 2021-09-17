<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        //health seeder
        $this->call(HealthConditionsTableSeeder::class);
        $this->call(ImmunizationsTableSeeder::class);
        $this->call(MeasurementsTableSeeder::class);


    }
}
