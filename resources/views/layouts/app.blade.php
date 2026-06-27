<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SampahSehat') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('layouts.navigation')

    @isset($header)
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            {{ $header }}
        </div>
    </header>
    @endisset

    <main class="max-w-7xl mx-auto py-6 px-4">
        @yield('content')
    </main>

</body>
</html>