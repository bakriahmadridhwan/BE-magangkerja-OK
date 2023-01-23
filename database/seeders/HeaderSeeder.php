<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'menu1' => 'Home',
            'menu2' => 'Event',
            'menu3' => 'About',
            'menu4' => 'Achievement',
            'menu5' => 'Login',
            'dropdown1' => 'Dokumentasi',
            'dropdown2' => 'Karya Peserta',
            'created_at' => now(),
        ]);
    }
}
