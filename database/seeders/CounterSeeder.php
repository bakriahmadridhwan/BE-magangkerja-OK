<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::create([
            'judul' => 'Pelamar Kerja',
            'jumlah' => 500,
            'created_at' => now(),
        ]);

        Counter::create([
            'judul' => 'Perusahaan Perekrut',
            'jumlah' => 100,
            'created_at' => now(),
        ]);

        Counter::create([
            'judul' => 'Lowongan Pekerjaan',
            'jumlah' => 250,
            'created_at' => now(),
        ]);
    }
}
