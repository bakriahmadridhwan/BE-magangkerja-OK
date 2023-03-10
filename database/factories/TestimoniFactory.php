<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimoni>
 */
class TestimoniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'testimoni' => fake()->sentence(mt_rand(2, 8)),
            'image' => 'null',
            'nama' => fake()->name(),
            'lulusan' => 'MOAB6',
            'sebagai' => fake()->jobTitle(),
        ];
    }
}
