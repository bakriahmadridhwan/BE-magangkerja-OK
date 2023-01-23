<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'image' => null,
            'nama' => 'Moh. Fajar Abdillah',
            'posisi' => 'Product Manager',
            'linktw' => 'tw',
            'linkwa' => 'wa',
            'linkli' => 'li',
            'created_at' => now(),
        ]);

        Team::create([
            'image' => null,
            'nama' => 'Bakri Ahmad Ridhwan',
            'posisi' => 'Back End Developer',
            'linktw' => 'tw',
            'linkwa' => 'wa',
            'linkli' => 'li',
            'created_at' => now(),
        ]);

        Team::create([
            'image' => null,
            'nama' => 'Robertus',
            'posisi' => 'Front End Developer',
            'linktw' => 'tw',
            'linkwa' => 'wa',
            'linkli' => 'li',
            'created_at' => now(),
        ]);

        Team::create([
            'image' => null,
            'nama' => 'M. Fitratul Iman',
            'posisi' => 'UI / UX Designer',
            'linktw' => 'tw',
            'linkwa' => 'wa',
            'linkli' => 'li',
            'created_at' => now(),
        ]);
    }
}
