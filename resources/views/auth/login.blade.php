<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="h-screen flex justify-center items-center">
        <div class="border-4 border-slate-500 rounded-xl shadow-lg p-10">
            <form action="{{ route('login') }}" method="POST" class="flex flex-col">
                @csrf
                <label for="email" class="mt-2 text-lg">Username</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="border-2 border-slate-300 rounded-md focus:bg-green-100 px-2 py-1">
                <label for="password" class="mt-2 text-lg">Password</label>
                <input type="password" name="password" id="password" class="border-2 border-slate-300 rounded-md focus:bg-green-100 px-2 py-1">
                <button class="rounded-lg mt-3 px-3 py-2 border-2 border-red-300 bg-red-800 hover:bg-red-900 dutation-200 text-white text-lg">Accedi</button>
            </form>
        </div>
    </section>
</body>
</html>