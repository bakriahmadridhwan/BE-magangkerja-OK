<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'image' => '',
            'tagline' => 'yuk',
            'judul' => 'merangkai bunga',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab ipsum at. Id nesciunt delectus doloribus suscipit praesentium reprehenderit, reiciendis, sequi ullam neque, magni ad.',
            'created_at' => now(),
        ]);
    }
}
