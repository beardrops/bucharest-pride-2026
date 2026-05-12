@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ $event->title }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('events.index') }}" class="text-sm text-pride-pink hover:underline mb-4 inline-block">&larr; {{ __('All Events') }}</a>

        @if($event->image)
            <div class="mb-8 rounded-2xl overflow-hidden shadow-md">
                <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full h-64 sm:h-96 object-cover">
            </div>
        @endif

        <h1 class="text-4xl sm:text-5xl font-bold text-pride-black dark:text-white mb-4">{{ $event->title }}</h1>

        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 dark:text-white/60 mb-8">
            <span class="flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                {{ $event->start_date->format('F j, Y') }}{{ $event->end_date && $event->end_date->format('M j') !== $event->start_date->format('M j') ? ' — ' . $event->end_date->format('F j, Y') : '' }}
            </span>
            <span class="flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                {{ $event->location }}
            </span>
        </div>

        <div class="prose prose-lg max-w-none dark:prose-invert text-gray-600 dark:text-white/60 leading-relaxed mb-10">
            {{ $event->description }}
        </div>

        @if($event->maps_url)
            <div class="rounded-2xl overflow-hidden shadow-md">
                <iframe src="{{ $event->maps_url }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        @endif
    </div>
</section>

@include('partials.footer')
</body>
</html>