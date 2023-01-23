<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::create([
            'image' => null,
            'judul' => 'Full Stack Web Developer with Laravel and Bootstrap',
            'partisipan' => 10,
            'created_at' => now(),
        ]);

        Achievement::create([
            'image' => null,
            'judul' => 'Build website eccomers with Wordpres',
            'partisipan' => 25,
            'created_at' => now(),
        ]);

        Achievement::create([
            'image' => null,
            'judul' => 'Create Website With UI/UX Design Mastery',
            'partisipan' => 15,
            'created_at' => now(),
        ]);
    }
}
