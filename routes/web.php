<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello 609-31mRJ SURGU!']);
});

// Маршрут для страницы входа уже имеет имя, что нужно для перенаправления неаутентифицированных пользователей
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Защита маршрутов с помощью middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::resource('films', FilmController::class);
    Route::resource('sessions', SessionController::class);
    Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
    // Добавьте дополнительные маршруты, которые должны быть доступны только аутентифицированным пользователям
});
// Маршрут для страницы ошибок
Route::get('/error', function () {
    return view('error');
})->name('error');



