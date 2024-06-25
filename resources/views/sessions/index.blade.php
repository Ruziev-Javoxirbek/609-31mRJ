{{-- resources/views/sessions/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        h1 {
            color: #343a40;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <h1>Сеансы</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Фильм</th>
            <th>Зал</th>
            <th>Время начала</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ optional($session->film)->name }}</td>
                <td>{{ optional($session->hall)->name }}</td>
                <td>{{ $session->start_time }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
