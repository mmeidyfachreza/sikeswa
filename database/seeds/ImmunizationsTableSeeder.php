<?php

use App\Immunization;
use Illuminate\Database\Seeder;

class ImmunizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Hepatitis_B',
            'Polio',
            'BCG',
            'DTP',
            'HIB',
            'PCV',
            'Rotavirus',
            'Influenza',
            'Campak',
            'MMR',
            'Tifoid',
            'Hepatitis_A',
            'Varisela',
            'HPV',
            'Japan_Encephalitis',
            'Dengue',
        ];

        foreach ($data as $item) {
            Immunization::create([
                'name'=>$item
            ]);
        }
    }
}
