<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ config('app.name', 'Кинотеатр') }}</title>
</head>
<body>
<header>
    @include('partials.navbar') <!-- Навигационное меню -->
</header>

<main class="container mt-4">
    @yield('content') <!-- Основной контент каждой страницы -->
</main>

<footer class="text-center mt-4">
    @include('partials.footer') <!-- Подвал -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
