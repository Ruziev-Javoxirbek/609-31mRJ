@extends('layout')

@section('content')
    <h1>Добавить новый фильм</h1>
    <form method="POST" action="{{ route('films.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Наименование</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите наименование фильма" maxlength="150" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Введите цену фильма" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Жанр</label>
            <select class="form-select" id="genre" name="genre">
                <option selected>Выберите жанр</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="drama">Драма</option>
                <option value="comedy">Комедия</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
