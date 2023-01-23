<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status' => 'aktif',
            'created_at' => now(),
        ]);

        Status::create([
            'status' => 'nonaktif',
            'created_at' => now(),
        ]);
    }
}
