<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'image' => null,
            'alamat' => 'Graha Universitas AMIKOM Yogyakarta, Gedung 1 Lantai 2Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta',
            'linkig' => 'linkig',
            'linkwa' => 'linkwa',
            'linkfb' => 'linkfb',
            'linkyt' => 'linkyt',
            'created_at' => now(),
        ]);
    }
}
