{{-- resources/views/error.blade.php --}}
@extends('layout')

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ url()->previous() }}">Вернуться назад</a>
@endsection
