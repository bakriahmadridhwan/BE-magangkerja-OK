<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peserta::create([
            'nama' => 'Fiorent Nicholas Yehardi,',
            'pekerjaan' => 'Android Developer',
            'tempatBekerja' => 'Nusantara Beta Studio',
            'lulusan' => 'Event Android Developer Learning Path',
            'pendapat' => 'Setelah mengikuti event yang diadakan magang kerja saya mendapatkan banyak insight, disini saya membuat sebuah platform android untuk mendukung minat masyarakat dibidang IT yang saya beri nama Level-Up',
            'image' => null,
            'created_at' => now(),
        ]);

        Peserta::create([
            'nama' => 'Bakri Ahmad Ridhwan',
            'pekerjaan' => 'Android Developer',
            'tempatBekerja' => 'Nusantara Beta Studio',
            'lulusan' => 'Event Android Developer Learning Path',
            'pendapat' => 'Setelah mengikuti event yang diadakan magang kerja saya mendapatkan banyak insight, disini saya membuat sebuah platform android untuk mendukung minat masyarakat dibidang IT yang saya beri nama Level-Up',
            'image' => null,
            'created_at' => now(),
        ]);

        Peserta::create([
            'nama' => 'Iman Alfito',
            'pekerjaan' => 'UI / UX Desainer',
            'tempatBekerja' => 'Merchedes',
            'lulusan' => 'Event UI/UX Desainer Learning Path',
            'pendapat' => 'Mengandalkan kuliah saja, tidak cukup.',
            'image' => null,
            'created_at' => now(),
        ]);
    }
}
