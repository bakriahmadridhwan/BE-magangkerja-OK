<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
        ]);
        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@test.com',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
        ]);
    }
}
