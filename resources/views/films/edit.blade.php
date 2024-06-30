{{-- resources/views/films/edit.blade.php --}}
@extends('layout')

@section('content')
    <div class="container mt-3">
        <h1 class="mb-3">Редактировать фильм</h1>
        <form method="POST" action="{{ route('films.update', $film->id) }}" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Название:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $film->name }}" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Длительность (мин):</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ $film->duration }}" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Жанр:</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $film->genre }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Цена:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $film->price ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection
