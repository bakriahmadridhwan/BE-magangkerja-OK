<?php

namespace Database\Seeders;

use App\Models\Tachievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TachievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tachievement::create([
            'tEvent' => 14,
            'tpartisipan' => 100,
            'deskripsi' => 'Disamping ini terdapat berbagai dokumentasi event yang telah diikuti banyak peserta di berbagai daerah. Event ini disusun dengan berbagai banyak materi yang unik dan tentunya seru banget.',
            'created_at' => now(),
        ]);
    }
}
