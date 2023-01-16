<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Username</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <label for="password_confirmation">Conferma password</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <button type="submit">Registrati</button>
    </form>
</body>
</html>