<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => null,
            'judul' => 'Bootstrap 5',
            'by' => 'magangkerja',

            'tentang' => fake()->sentence(),
            'materi' => fake()->sentence(),
            'sk' => fake()->sentence(),

            'tanggalMulai' => fake()->date(),
            'waktuMulai' => fake()->time(),
            'lokasi' => 'gmeet',
            'peralatan' => 'figma',
            'pendaftaran' => 'follow ig',
            'recomended_id' => rand(1, 2),
            'mentor_id' => rand(1, 3),
            'status_id' => rand(1, 2),
            'category_id' => rand(1, 3),
            'created_at' => now(),
        ];
    }
}
