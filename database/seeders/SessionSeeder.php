<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovieSession;
use App\Models\Film;
use App\Models\Hall;

class SessionSeeder extends Seeder
{
    public function run()
    {
        $film = Film::first();
        $hall = Hall::first();

        if ($film && $hall) {
            MovieSession::create([
                'film_id' => $film->id,
                'hall_id' => $hall->id,
                'start_time' => now(),
            ]);

        } else {
            \Log::warning('No films or halls found, skipping MovieSession seeding.');
        }
    }
}
