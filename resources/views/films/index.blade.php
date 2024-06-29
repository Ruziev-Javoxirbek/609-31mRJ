@extends('layouts.app')

@if(session('welcome_message'))
    <div class="alert alert-success">
        {{ session('welcome_message') }}
    </div>
@endif

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h1>Фильмы</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Выйти из системы</button>
            </form>
        </div>

        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>Названия</th>
                <th>Длительность (мин)</th>
                <th>Жанр</th>
                <th>Цена</th>
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
                    <td>{{ number_format($film->price, 2) }}</td>
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

        <div>
            {{ $films->appends(['perpage' => request('perpage')])->links() }}
        </div>
    </div>
@endsection
