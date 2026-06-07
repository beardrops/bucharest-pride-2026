@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') === 'corporate' ? 'theme-corporate' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ __('Events') }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body antialiased bg-white text-pride-black">

@include('partials.navbar')

{{-- HERO --}}
<section class="relative pt-32 pb-20 bg-pride-black overflow-hidden">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <p class="font-head font-semibold text-pride-pink text-sm mb-4 tracking-[0.2em] uppercase">{{ __('Program') }}</p>
        <h1 class="font-head font-bold text-white text-5xl sm:text-6xl lg:text-7xl leading-[0.9] -tracking-[0.02em]">{{ __('Events') }}</h1>
    </div>
</section>

{{-- EVENTS LIST --}}
<section class="py-16 sm:py-24 bg-pride-beige">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8">

        @if($events->count())
        <div class="space-y-12">
            @foreach($events as $event)
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 bg-white border-2 border-pride-black overflow-hidden mb-2">
                {{-- Left column: Image --}}
                <div class="lg:col-span-1 relative h-56 lg:h-auto overflow-hidden">
                    @if($event->image)
                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    @else
                        <div class="w-full h-full bg-pride-pink"></div>
                    @endif
                    {{-- Date badge --}}
                    <div class="absolute top-3 left-3 bg-white border-2 border-pride-black px-2.5 py-1.5 text-center">
                        <p class="font-head font-bold text-pride-pink text-lg leading-none">{{ $event->start_date->day }}</p>
                        <p class="font-head font-semibold text-pride-black text-xs uppercase leading-none">{{ $event->start_date->format('M') }}</p>
                    </div>
                </div>

                {{-- Right column: Content --}}
                <div class="lg:col-span-2 p-6 lg:p-8 flex flex-col justify-between">
                    <div>
                        {{-- Date range --}}
                        <p class="text-xs font-head font-semibold text-pride-pink uppercase tracking-[0.1em] mb-2">
                            {{ $event->start_date->format('F j') }}{{ $event->end_date && $event->end_date->format('M j') !== $event->start_date->format('M j') ? ' — ' . $event->end_date->format('F j') : '' }}
                        </p>

                        {{-- Title --}}
                        <h2 class="font-head font-bold text-xl text-pride-black mb-3 leading-tight">{{ $event->title }}</h2>

                        {{-- Description --}}
                        <p class="text-sm text-gray-600 leading-relaxed mb-3 line-clamp-5">{{ Str::limit($event->description, 150) }}</p>

                        {{-- Location --}}
                        <p class="text-xs text-gray-500">{{ $event->location }}</p>
                    </div>

                    {{-- Button --}}
                    <div class="mt-6 pt-4 border-t border-pride-black/10">
                        <a href="{{ route('events.show', $event) }}" class="font-head font-semibold text-sm text-pride-black hover:text-pride-pink transition">{{ __('View Details') }} &rarr;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-12 flex justify-center">
            {{ $events->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <h3 class="font-head font-bold text-xl text-pride-black mb-3">{{ __('No events yet') }}</h3>
            <p class="text-gray-500 mb-6">{{ __('Check back soon for updates.') }}</p>
            <a href="{{ route('home') }}" class="btn-pri">{{ __('Back to home') }}</a>
        </div>
        @endif
    </div>
</section>

@include('partials.footer')
</body>
</html>
