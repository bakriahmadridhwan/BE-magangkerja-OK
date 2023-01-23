<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'Programming',
            'created_at' => now(),
        ]);

        Category::create([
            'category' => 'UI/UX',
            'created_at' => now(),
        ]);

        Category::create([
            'category' => 'Web Design',
            'created_at' => now(),
        ]);
    }
}
