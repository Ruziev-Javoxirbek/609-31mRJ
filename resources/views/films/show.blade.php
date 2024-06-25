{{-- resources/views/films/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $film->name }}</h1>
    <p>Продолжительность: {{ $film->duration }} минут</p>
    <h2>Сеансы:</h2>
    <ul>
        @foreach ($film->sessions as $session)
            <li>{{ $session->start_time }} в зале {{ $session->hall->name }}</li>
        @endforeach
    </ul>
@endsection
