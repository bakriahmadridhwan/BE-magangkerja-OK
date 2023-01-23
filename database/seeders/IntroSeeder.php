<?php

namespace Database\Seeders;

use App\Models\Intro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Intro::create([
            'image' => '',
            'tagline' => 'yuk',
            'judul' => 'merangkai bunga',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab ipsum at. Id nesciunt delectus doloribus suscipit praesentium reprehenderit, reiciendis, sequi ullam neque, magni ad.',
            'created_at' => now(),
        ]);
    }
}
