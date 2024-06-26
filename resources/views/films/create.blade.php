@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        <label for="name">Название фильма:</label>
        <input type="text" name="name" id="name" required>
        <label for="duration">Продолжительность (мин):</label>
        <input type="number" name="duration" id="duration" required>
        <label for="genre">Жанр:</label>
        <input type="text" name="genre" id="genre">
        <button type="submit">Создать фильм</button>
    </form>
@endsection
