<?php

use App\BrainDomination;
use Illuminate\Database\Seeder;

class BrainDominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = ['Suka bergerak dan banyak beraktivitas?',
        'Kesulitan dalam mewarnai gambar dan menulis?',
        'Sangat peka terhadap kritikan?',
        'Terampil dalam menyusun mainan (building toys), misalnya LEGO, balok susun?',
        'Terampil dalam menyusun puzzles dan mazes?',
        'Bila dibacakan sebuah buku kepada kamu sebanyak 2 atau 3 kali, dapatkah kamu mengisi kata yang hilang dengan ingatan yang sangat baik?',
        'Sangat penting untuk menyukai guru disekolah agar dapat mengerjakan pekerjaan dengan baik di dalam kelas?',
        'Mudah beralih perhatiannya, atau sering melamun?',
        'Tidak dapat menyelesaikan tugas secara konsisten?',
        'Cenderung berbuat dulu baru berpikir?',
        'Harus memotong label baju sebelum dikenakan?',
        'Hanya mau memakai baju yang lembut dan nyaman?',
        'Sangat menikmati saat berolah raga, berada di pesta yang ramai, dan berekreasi di taman hiburan?',
        'Cenderung pemalu?',
        'Harus selalu diingatkan untuk mengerjakan sesuatu pekerjaan?',
        'Senang bersaing dan tidak mau kalah ?',
        'Memiliki rasa humor yang baik ?',
        'Mempunyai kemampuan di atas rata-rata untuk mengerti dan menciptakan permainan kata ?',
        'Selalu ingin sempurna dalam mencoba sesuatu yang baru?',
        'Mampukah mengingat kembali saat liburan atau kejadian pada 1 atau 2 tahun yang lalu, secara gamblang detailnya ?',];


        foreach ($dataset as $value) {
            BrainDomination::create([
                'question'=>$value
            ]);
        }
    }
}
