<!DOCTYPE html>
<html class="scrollbar-thin scrollbar-track-slate-100 scrollbar-thumb-slate-500" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="sviluppo siti web, siti ottimizzati seo, sviluppo ecommerce, gestionali web fabio angelici">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $ogUrl }}">
    <meta property="og:description" content="{{ $ogDescription }}">
    <meta property="og:title" content="{{ $ogTitle }}">
    <meta property="og:locale" content="it_IT">
    <meta property="og:site_name" content="Fabio Angelici | Web Developer Freelance">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@fabio_angelici">
    <meta name="twitter:title" content="Fabio Angelici | Sviluppo siti web ecommerce e gestionali">
    <meta name="twitter:description" content="{{ $ogDescription }}">
    <meta name="twitter:image" content="https://www.fabioangelici.com/images/logo.webp">
    <link rel="canonical" href="{{ $canonical }}">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
    <x-header/>
    {{ $slot }}
</body>
</html>