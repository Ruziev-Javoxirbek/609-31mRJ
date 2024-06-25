{{-- resources/views/films/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Фильмы</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Названия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($films as $film)
            <tr>
                <td>{{ $film->id }}</td>
                <td>{{ $film->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
