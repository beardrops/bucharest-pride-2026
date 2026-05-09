@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ __('Events') }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-purple-900 via-pink-800 to-red-700 text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">{{ __('Events') }}</h1>
        <p class="text-xl text-white/80">{{ __("Events You Can't Miss") }}</p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($events->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($events as $event)
                    <a href="{{ route('events.show', $event) }}" class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition group block">
                        @if($event->image)
                            <div class="h-48 overflow-hidden">
                                <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/>
                                </svg>
                            </div>
                        @endif
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-sm text-pink-600 dark:text-pink-400 font-medium mb-2">
                                <span class="w-2 h-2 rounded-full bg-pink-600 dark:bg-pink-400"></span>
                                {{ $event->start_date->format('M j') }}{{ $event->end_date && $event->end_date->format('M j') !== $event->start_date->format('M j') ? ' – ' . $event->end_date->format('M j') : '' }}
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-400 transition">{{ $event->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-2 line-clamp-2">{{ $event->location }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <p class="text-gray-500 dark:text-gray-400 text-lg">{{ __('No events scheduled yet.') }}</p>
                <a href="{{ route('home') }}" class="inline-block mt-4 text-pink-600 hover:underline">{{ __('Back to home') }}</a>
            </div>
        @endif
    </div>
</section>

@include('partials.footer')
</body>
</html>