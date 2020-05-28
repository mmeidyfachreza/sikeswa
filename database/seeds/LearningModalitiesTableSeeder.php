<?php

use App\LearningModality;
use Illuminate\Database\Seeder;

class LearningModalitiesTableSeeder extends Seeder
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
                'question'=>'Suka mengingat sesuatu dengan membayangkannya',
                'type'=>'visual'
            ],
            [
                'question'=>'Memahami sesuatu dengan melihat grafik/bagan/skema atau membaca tulisan',
                'type'=>'visual'
            ],
            [
                'question'=>'Memahami sesuatu dari mendengar/petunjuk lisan',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Mudah mengikuti instruksi tertulis',
                'type'=>'visual'
            ],
            [
                'question'=>'Bisa mengerjakan grafik, bagan/skema dan poster dengan baik.',
                'type'=>'visual'
            ],
            [
                'question'=>'Senang melakukan tugas dengan di dikte',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Saya dapat menyusun bongkar pasang gambar (puzzles) dengan baik',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Senang membaca',
                'type'=>'visual'
            ],
            [
                'question'=>'Mudah memahami penjelasan dengan alat peraga',
                'type'=>'visual'
            ],
            [
                'question'=>'Suka mencatat dan membuat daftar apa yang ingin saya ingat',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Mudah mengikuti petunjuk di peta',
                'type'=>'visual'
            ],
            [
                'question'=>'Suka mengikuti petunjuk lisan',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Suka mendengar seseorang berbicara dalam mendapatkan informasi',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Membutuhkan penjelasan tentang suatu diagram atau peta.',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Senang berdiskusi membicarakan suatu hal.',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Suka mendengarkan  irama musik untuk mempelajari sesuatu.',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Suka mendengarkan musik',
                'type'=>'auditorik'
            ],
            [
                'question'=>'Suka melakukan gerakan-gerakan untuk mengingat sesuatu (mengetuk-ngetuk pena, menggoyang-goyang tungkai).',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Suka bekerja dengan tangan saya dalam membuat atau memperbaiki sesuatu',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Suka berdiri atau berjalan-jalan saat belajar',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Suka menggunakan gerakan tangan saat berbicara',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Terampil berolah raga.',
                'type'=>'kinestetik'
            ],
            [
                'question'=>'Suka melihat gerakan tubuh seseorang untuk memahami maksud pikirannya.',
                'type'=>'visual'
            ],
            [
                'question'=>'Harus melakukan apa yang telah dipelajari agar mudah dipahami',
                'type'=>'kinestetik'
            ],
        ];


        foreach ($dataset as $value) {
            LearningModality::create([
                'question'=>$value['question'],
                'type'=>$value['type']
            ]);
        }
        error_log('Pengisian Data Berhasil');
    }
}
