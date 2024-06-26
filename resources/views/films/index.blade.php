{{-- resources/views/films/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Фильмы</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Названия</th>
            <th>Длительность (мин)</th>
            <th>Жанр</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($films as $film)
            <tr>
                <td>{{ $film->id }}</td>
                <td>{{ $film->name }}</td>
                <td>{{ $film->duration }}</td>
                <td>{{ $film->genre }}</td>
                <td>
                    <a href="{{ route('films.edit', $film->id) }}">Редактировать</a>
                    <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Вы уверены?')">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
