<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    public function run()
    {
        Hall::create([
            'name' => 'Hall 1',
        ]);

        Hall::create([
            'name' => 'Hall 2',
        ]);
    }
}
