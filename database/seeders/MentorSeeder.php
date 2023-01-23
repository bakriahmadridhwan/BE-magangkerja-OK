<?php

namespace Database\Seeders;

use App\Models\Mentor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mentor::create([
            'image' => null,
            'nama' => 'Rabiatul Awaliah',
            'pekerjaan' => 'UI /UX at Codingin',
            'created_at' => now(),
        ]);

        Mentor::create([
            'image' => null,
            'nama' => 'Fahasya Fajar',
            'pekerjaan' => 'Full Stack Web Developer',
            'created_at' => now(),
        ]);

        Mentor::create([
            'image' => null,
            'nama' => 'Bakri Ahmad Ridwan',
            'pekerjaan' => 'FE',
            'created_at' => now(),
        ]);
    }
}
