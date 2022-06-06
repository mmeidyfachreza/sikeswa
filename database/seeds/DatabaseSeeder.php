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

        //medical record form seeder
        $this->call(MentalHealthSeeder::class);
        $this->call(MentalHealth2Seeder::class);
        $this->call(LearningModalitiesSeeder::class);
        $this->call(BrainDominationsTableSeeder::class);

    }
}
