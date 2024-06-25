{{-- resources/views/sessions/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Сеанс: {{ $session->film->name }}</h1>
    <p>Зал: {{ $session->hall->name }}</p>
    <p>Время начала: {{ $session->start_time }}</p>
@endsection
