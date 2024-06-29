{{-- resources/views/films/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Редактировать фильм</h1>
    <form method="POST" action="{{ route('films.update', $film->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Название:</label>
            <input type="text" name="name" value="{{ $film->name }}" required>
        </div>
        <div>
            <label>Длительность (мин):</label>
            <input type="number" name="duration" value="{{ $film->duration }}" required>
        </div>
        <div>
            <label>Жанр:</label>
            <input type="text" name="genre" value="{{ $film->genre }}" required>
        </div>
        <div>
            <label>Цена:</label>
            <input type="text" name="price" value="{{ $film->price ?? '' }}" required>
        </div>
        <button type="submit">Обновить</button>
    </form>
@endsection
