<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    public function run()
    {
        Film::create([
            'name' => 'Inception',
            'duration' => 148,
            'genre' => 'Sci-Fi'
        ]);

        Film::create([
            'name' => 'The Matrix',
            'duration' => 136,
            'genre' => 'Sci-Fi'
        ]);
    }
}
