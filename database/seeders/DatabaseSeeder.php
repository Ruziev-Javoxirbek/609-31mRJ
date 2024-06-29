<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(FilmSeeder::class);
        $this->call(HallSeeder::class);
        $this->call(SessionSeeder::class);

        // Проверка существования пользователя перед добавлением
        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Рузиев Жавохибек',
                'email' => 'ttest@example.com',
                'password' => bcrypt('jasurbek12'), // Здесь вы должны указать исходный пароль, а не уже хешированное значение
            ]);
        }
    }
}
