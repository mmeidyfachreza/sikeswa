<?php

use App\MentalHealth;
use Illuminate\Database\Seeder;

class MentalHealthTableSeeder extends Seeder
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
                'question'=>'Saya berusaha bersikap baik kepada orang lain. Saya Peduli dengan perasan Mereka ',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Saya gelisah, saya tidak dapat diam untuk waktu Lama',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Saya sering sakit kepala, sakit perut atau macam2 sakit lain',
                'type'=>'emosional'
            ],
            [
                'question'=>'Kalau saya memiliki mainan CD atau makanan saya biasanya berbagi dengan orang lain',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Saya menjadi sangat marah dan sering tidak bisa mengendalikan kemarahan saya',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Saya lebih suka sendirian daripada bersama dengan orang-orang yang seumur saya',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Saya biasanya melakukan apa yang di perintahkan oleh orang lain',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Saya banyak merasa cemas atau khawatir terhadap apapun',
                'type'=>'emosional'
            ],
            [
                'question'=>'Saya selalu siap menolaong jika ada orang terluka, kecewa atau merasa sakit',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Bila sedang gelisah atau cemas badan saya sering bergerak-gerak tanpa saya sadari',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Saya mempunyai satu teman baik atau lebih',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Saya sering bertengkar dengan orang lain. Saya dapat memaksa orang lain melakukannya apa yang saya inginkan',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Saya sering merasa tidak bahagia, sedih atau menangis',
                'type'=>'emosional'
            ],
            [
                'question'=>'Orang Lain seumur saya pada umumnya menyukai saya',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Perhatian saya mudah teralihkan. Saya sulit memusatkan perhatian pada apapun',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Saya merasa gugup dalam situasi baru. Saya mudah kehilangan rasa percaya diri',
                'type'=>'emosional'
            ],
            [
                'question'=>'Saya bersikap baik pada anak-anak yang lebih muda dari saya',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Saya sering dituduh berbohong atau berbuat curang',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Saya sering di ganggu atau dipermainkan oleh anak-anak atau remaja lainnya',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Saya sering menawarkan diri untuk membantu orang lain, orang tua, guru atau anak-anak',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Sebelum melakukan sesuatu saya berpikir dahulu tentang akibatnya',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Saya mengambil barang yang bukan milik saya dari rumah, sekolah atau darimana saja',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Saya lebih mudah berteman dengan orang dewasa daripada dengan orang-orang seumur saya.',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Banyak yang saya takuti. Saya mudah menjadi takut',
                'type'=>'emosional'
            ],
            [
                'question'=>'Saya menyelesaikan pekerjaan yang sedang saya lakukan. Saya mempunyai perhatian yang baik terhadap apapun',
                'type'=>'hiperaktivitas'
            ],
        ];


        foreach ($dataset as $value) {
            MentalHealth::create([
                'question'=>$value['question'],
                'type'=>$value['type']
            ]);
        }

    }
}
