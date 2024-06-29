<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
@if(Auth::check())
    <p>Добро пожаловать, {{ Auth::user()->name }}!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Выйти из системы</button>
    </form>
@else
    <form method="POST" action="{{ route('authenticate') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
    @error('email')
    <div>{{ $message }}</div>
    @enderror
@endif
</body>
</html>
