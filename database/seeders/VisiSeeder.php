<?php

namespace Database\Seeders;

use App\Models\Visi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visi::create([
            'visi' => 'Sejuta digital talent
            untuk Indonesia',
            'misi' => '"To train, certify, and
            connect youth to jobs"',
            'created_at' => now(),
        ]);
    }
}
