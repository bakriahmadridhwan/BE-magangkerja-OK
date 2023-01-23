<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Question::create([
            'nama' => 'Bakri Ahmad Ridhwan',
            'email' => 'bahridhwan@gmail.com',
            'pertanyaan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, officia.',
            'created_at' => now(),
        ]);
    }
}
