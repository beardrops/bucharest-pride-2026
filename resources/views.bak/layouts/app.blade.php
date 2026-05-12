<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="theme()" x-init="init()" :class="{ 'dark': dark }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bucharest Pride') }} @isset($title) — {{ $title }} @endisset</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
        <div class="min-h-screen">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            function theme() {
                return {
                    dark: false,
                    init() {
                        this.dark = localStorage.getItem('theme') === 'dark' ||
                            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
                    },
                    toggle() {
                        this.dark = !this.dark;
                        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
                    }
                }
            }
        </script>
    </body>
</html>
