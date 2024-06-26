<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'PyramidDB')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body x-cloak x-data="{ themeSwitcher() }" class="font-sans antialiased bg-gray-100 dark:bg-dark-800 w-screen">
    <x-banner />

    @include('layouts.includes.header')
    @include('layouts.includes.sidebar')

    <main class="px-4 flex flex-grow">
        {{ $slot }}
    </main>

    @include('layouts.includes.footer')

    @stack('modals')

    @livewireScripts

</html>
