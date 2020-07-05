<?php

use App\HealthScreening;
use Illuminate\Database\Seeder;

class HealthScreeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = [
            [
                'question'=>'Memiliki masalah kesehatan',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Alergi (tidak tahan ) makanan tertentu',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Alergi (tidak tahan ) obat tertentu',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Asma/bengek',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Saat ini minum obat',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Pernah dirawat di rumah sakit',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Pernah mengalami cedera serius akibat kecelakaan ( geger otak / patah tulang atau lainnya )',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Pernah melakukan transfusi darah ',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Kejang berulang',
                'type'=>'Riwayat Kesehatan'
            ],
            [
                'question'=>'Memiliki penyakit lainnya',
                'type'=>'Riwayat Kesehatan'
            ],
            
            [
                'question'=>'Apakah kamu memiliki catatan imunisasi',
                'type'=>'Riwayat Imunisasi'
            ],
            [
                'question'=>'Apakah pada saat bayi  mendapat imunisasi DPT sebanyak 3 kali lengkap',
                'type'=>'Riwayat Imunisasi'
            ],
            
            [
                'question'=>'Tuberkulosis ( TBC ) paru',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Diabetes melitus / kencing manis',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Hepatitis / sakit kuning',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Asma / bengek',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Storke / Lumpuh',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Penyakit Jantung',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Obesitas / Kegemukan',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Tekanan darah tinggi',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Kanker / Tumor ganas',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Thalassemia',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Haemofilia',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            [
                'question'=>'Anemia',
                'type'=>'Informasi Kesehatan Keluarga'
            ],
            
            [
                'question'=>'Apakah kamu makan pagi',
                'type'=>'Gaya Hidup'
            ],
            [
                'question'=>'Apakah kamu jajan di sekolah',
                'type'=>'Gaya Hidup'
            ],
            [
                'question'=>'Apakah orang tua /  keluarga ada yang merokok',
                'type'=>'Gaya Hidup'
            ],
            [
                'question'=>'Apakah orang tua /  keluarga ada yang minum minuman beralkohol',
                'type'=>'Gaya Hidup'
            ],
            
        ];
        foreach ($dataset as $value) {
            HealthScreening::create([
                'question'=>$value['question'],
                'type'=>$value['type']
            ]);
        }
        error_log('Pengisian Data Berhasil');
    }
}
