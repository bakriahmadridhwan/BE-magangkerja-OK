<?php

namespace Database\Seeders;

use App\Models\Recomended;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecomendedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recomended::create([
            'recomended' => 'recomended',
            'created_at' => now(),
        ]);

        Recomended::create([
            'recomended' => 'kosong',
            'created_at' => now(),
        ]);
    }
}
