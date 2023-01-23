<?php

namespace Database\Seeders;

use App\Models\Alasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alasan::create([
            'image' => null,
            'judul' => 'Sertifikasi',
            'deskripsi' => 'Kamu akan mendapatkan SkilBadge setiap kali berhasil menyelesaikan
            sebuah kelas. SkilBadge tersebut dapat digunakan sebagai sertifikasi pada
            saat job hunting lho!.',
            'created_at' => now(),
        ]);

        Alasan::create([
            'image' => null,
            'judul' => 'Siap Kerja',
            'deskripsi' => 'Terhubung dengan lebih dari 150+ hiring partners, kamu akan mempunyai
            kesempatan untuk mendapatkan pekerjaan setelah lulus dari program kami.
            Tunggu apa lagi? Yuk mulai belajar!.',
            'created_at' => now(),
        ]);
    }
}
