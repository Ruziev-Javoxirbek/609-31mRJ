<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello 609-31mRJ SURGU!']);
});

// Маршруты для фильмов
Route::resource('films', FilmController::class);

// Маршруты для сеансов
Route::resource('sessions', SessionController::class);
