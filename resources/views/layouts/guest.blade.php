<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') === 'corporate' ? 'theme-corporate' : '' }}" x-data="theme()" x-init="init()" :class="{ 'dark': dark }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Bucharest Pride') }} @isset($title) — {{ $title }} @endisset</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-pride-black antialiased dark:bg-pride-black dark:text-white">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-pride-gray dark:bg-pride-black">
            {{-- Language Switcher --}}
            <div class="absolute top-4 right-4">
                <div class="flex gap-1 bg-white dark:bg-pride-black rounded-lg shadow-sm border dark:border-pride-black overflow-hidden">
                    <a href="{{ route('locale.switch', 'en') }}" class="px-3 py-1.5 text-xs font-medium transition {{ app()->getLocale() === 'en' ? 'bg-pride-navy text-white' : 'text-gray-600 dark:text-white/60 hover:text-pride-black dark:hover:text-white' }}">EN</a>
                    <a href="{{ route('locale.switch', 'ro') }}" class="px-3 py-1.5 text-xs font-medium transition {{ app()->getLocale() === 'ro' ? 'bg-pride-navy text-white' : 'text-gray-600 dark:text-white/60 hover:text-pride-black dark:hover:text-white' }}">RO</a>
                </div>
            </div>

            <div class="mb-4">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500 dark:text-white/60" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-pride-black shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
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