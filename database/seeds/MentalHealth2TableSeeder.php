<?php

use App\MentalHealth2;
use Illuminate\Database\Seeder;

class MentalHealth2TableSeeder extends Seeder
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
                'question'=>'Dapat memperdulikan perasaan orang lain',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Gelisah, terlalu aktif, tidak dapat diam  untuk waktu lama',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Sering mengeluh sakit kepala, sakit perut atau saki lain-lainnya',
                'type'=>'emosional'
            ],
            [
                'question'=>'Kalau mempunyai mainan, kesenangan, atau pensil, anak bersedia berbagi  dengan anak-anak lain',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Sering sulit mengendalikan kemarahan',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Cendrung menyendiri, lebih suka  bermain seorang diri',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Umumnya bertingkah laku baik, biasanya apa yang dilakukan orang dewasa',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Benyak kekhawatiran atau sering tampak khawatir',
                'type'=>'emosional'
            ],
            [
                'question'=>'Suka menolong, jika seseorang terluka, kecewa atau merasa sakit',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Terus menerus  bergerak dengan resah atau menggeliat-geliat',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Mempunyai satu atau lebih taman baik',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Sering berkelahi dengan anaka-anak lain atau mengintimidasi  mereka',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Sering merasa tidak bahagia',
                'type'=>'emosional'
            ],
            [
                'question'=>'Pada umumnya disukai oleh anak-anak lain',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Mudah teralih perhatiannya, tidak dapat berkonentrasi',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Gugup atau sulit berpisah dengan orang tuanya/ pengasuhnya pada situasi baru, mudah kehilangan rasa percaya diri',
                'type'=>'emosional'
            ],
            [
                'question'=>'Bersikap baik terhadap anak-anak yang lebih mudah',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Sering berbohong arbuat curang',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Diganggu, dipermainkan, diintimidasi atau diancam oleh anak-anak  lain',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Sering menawarkan diri untuk membantu  orang lain         ( orang tua, guru dan anak-anak lain )',
                'type'=>'kekuatan'
            ],
            [
                'question'=>'Sebelum melakukan sesuatu, ia berpikir dahulu tentang akibatnya',
                'type'=>'hiperaktivitas'
            ],
            [
                'question'=>'Mencuri dari rumah, sekolah atau tempat lain',
                'type'=>'perilaku'
            ],
            [
                'question'=>'Lebih mudah berteman  dengan orang dewasa  dari pada dengan anak-anak lain',
                'type'=>'teman sebaya'
            ],
            [
                'question'=>'Banyak yang ditakuti , mudah menjadi takut',
                'type'=>'emosional'
            ],
            [
                'question'=>'Memiliki perhatian yang baik terhadap apapun, mampu menyelesaikan  tugas atau pekerjaan rumah sampai selesai.',
                'type'=>'hiperaktivitas'
            ],
        ];
        foreach ($dataset as $value) {
            MentalHealth2::create([
                'question'=>$value['question'],
                'type'=>$value['type']
            ]);
        }
        error_log('Pengisian Data Berhasil');
    }
}
