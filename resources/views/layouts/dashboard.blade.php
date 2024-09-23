<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonds.bunny.net/css?family=figtree:400,500,600&display-swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-stone-200 flex">

    <aside>
        @include('components.dashboard-sidebar')
    </aside>

    <main class="w-full">
        @include('components.dashboard-header')
        {{ $slot }}
</main>
    </div>
    @include('sweetalert::alert')
</body>
</html>