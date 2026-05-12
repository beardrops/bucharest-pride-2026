<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bucharest Pride') }} — June 2026</title>

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">

@include('partials.navbar')

{{-- HERO --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-pink-800 to-red-700"></div>
    <div class="absolute inset-0 opacity-20"
         style="background-image: linear-gradient(45deg, #fff 25%, transparent 25%), linear-gradient(-45deg, #fff 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #fff 75%), linear-gradient(-45deg, transparent 75%, #fff 75%);
                background-size: 20px 20px; background-position: 0 0, 0 10px, 10px -10px, -10px 0px;"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/60 via-transparent to-transparent"></div>

    <div class="relative z-10 text-center px-4 sm:px-6 max-w-4xl mx-auto">
        <div class="flex justify-center gap-1.5 mb-8">
            <span class="w-4 h-4 rounded-full bg-red-400"></span>
            <span class="w-4 h-4 rounded-full bg-orange-400"></span>
            <span class="w-4 h-4 rounded-full bg-yellow-300"></span>
            <span class="w-4 h-4 rounded-full bg-green-400"></span>
            <span class="w-4 h-4 rounded-full bg-blue-400"></span>
            <span class="w-4 h-4 rounded-full bg-purple-400"></span>
        </div>

        <h1 class="text-5xl sm:text-6xl md:text-8xl font-bold text-white leading-tight mb-4 tracking-tight">
            Bucharest<br><span class="text-yellow-300">Pride</span>
        </h1>

        <p class="text-xl sm:text-2xl md:text-3xl text-white/90 font-light mb-3">{{ __('June 27 – July 5, 2026') }}</p>

        <p class="text-lg text-white/80 font-light mb-10 max-w-2xl mx-auto">
            {{ __('Celebrate diversity. Demand equality. Unite for love.') }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#events" class="inline-flex items-center px-8 py-3.5 rounded-full bg-white text-purple-900 font-semibold text-base hover:bg-yellow-300 hover:text-purple-900 transition shadow-lg">
                {{ __('See the Program') }}
            </a>
            <a href="#support" class="inline-flex items-center px-8 py-3.5 rounded-full bg-pink-600 text-white font-semibold text-base hover:bg-pink-500 transition shadow-lg">
                {{ __('Donate') }}
            </a>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

{{-- COUNTDOWN --}}
<section class="py-16 bg-gray-50 dark:bg-gray-900">
    <div x-data="countdown('2026-06-27T10:00:00')" x-init="init(); setInterval(init, 1000)"
         class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-2">{{ __("It's getting closer!") }}</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-8">{{ __('Bucharest Pride 2026') }}</h2>
        <div class="grid grid-cols-4 gap-4 sm:gap-8 max-w-xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-purple-700 dark:text-purple-400" x-text="days">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">{{ __('Days') }}</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-pink-600 dark:text-pink-400" x-text="hours">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">{{ __('Hours') }}</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-orange-500 dark:text-orange-400" x-text="minutes">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">{{ __('Minutes') }}</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-green-600 dark:text-green-400" x-text="seconds">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">{{ __('Seconds') }}</div>
            </div>
        </div>
    </div>
</section>

<script>
    function countdown(targetDate) {
        return {
            days: '00', hours: '00', minutes: '00', seconds: '00',
            init() {
                const target = new Date(targetDate).getTime();
                const now = new Date().getTime();
                const diff = Math.max(0, target - now);
                this.days = String(Math.floor(diff / (1000 * 60 * 60 * 24))).padStart(2, '0');
                this.hours = String(Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
                this.minutes = String(Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                this.seconds = String(Math.floor((diff % (1000 * 60)) / 1000)).padStart(2, '0');
            }
        }
    }
</script>

{{-- ABOUT --}}
<section id="about" class="py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">{{ __('About') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    {{ __('Educate.') }}<br>
                    <span class="text-pink-600 dark:text-pink-400">{{ __('Commemorate.') }}</span><br>
                    {{ __('Celebrate.') }} {{ __('Liberate.') }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    {{ __('About description') }}
                </p>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">
                    {{ __('About description 2') }}
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-purple-700 dark:text-purple-400">50K+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ __('Annual Attendees') }}</div>
                </div>
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-blue-700 dark:text-blue-400">20+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ __('Years of Pride') }}</div>
                </div>
                <div class="bg-gradient-to-br from-green-100 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-green-700 dark:text-green-400">100+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ __('Events & Activities') }}</div>
                </div>
                <div class="bg-gradient-to-br from-yellow-100 to-orange-100 dark:from-yellow-900/30 dark:to-orange-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-orange-600 dark:text-orange-400">#1</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ __('Largest in Romania') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- EVENTS HIGHLIGHT --}}
<section id="events" class="py-20 sm:py-28 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">{{ __('Program') }}</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ __("Events You Can't Miss") }}</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                {{ __('Events subtitle') }}
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition group">
                <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-500 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0A2.701 2.701 0 003 15.546M21 15.546V5.25A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25v10.296m18 0v4.454A2.25 2.25 0 0118.75 22H5.25A2.25 2.25 0 013 19.75v-4.454"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-pink-600 dark:text-pink-400 font-medium mb-2">
                        <span class="w-2 h-2 rounded-full bg-pink-600 dark:bg-pink-400"></span>
                        June 27
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-400 transition">{{ __('Opening Ceremony') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">{{ __('Opening Ceremony desc') }}</p>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition group">
                <div class="h-48 bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-blue-600 dark:text-blue-400 font-medium mb-2">
                        <span class="w-2 h-2 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                        June 28 – 30
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">{{ __('Human Rights Summit') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">{{ __('Human Rights Summit desc') }}</p>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition group">
                <div class="h-48 bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-sm text-green-600 dark:text-green-400 font-medium mb-2">
                        <span class="w-2 h-2 rounded-full bg-green-600 dark:bg-green-400"></span>
                    July 1 – 5
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition">{{ __('Pride Festival') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">{{ __('Pride Festival desc') }}</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('events.index') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-purple-700 text-white font-semibold hover:bg-purple-800 transition shadow">
                {{ __('See All Events') }}
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- PARADE SECTION --}}
<section id="parade" class="py-20 sm:py-28 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-pink-600 via-purple-700 to-indigo-900"></div>
    <div class="absolute inset-0 opacity-10"
         style="background-image: linear-gradient(45deg, #fff 25%, transparent 25%), linear-gradient(-45deg, #fff 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #fff 75%), linear-gradient(-45deg, transparent 75%, #fff 75%);
                background-size: 30px 30px; background-position: 0 0, 0 15px, 15px -15px, -15px 0px;"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm font-semibold uppercase tracking-widest text-yellow-300 mb-3">{{ __('Pride Parade') }}</p>
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            {{ __('March with Us') }}
        </h2>
        <p class="text-xl text-white/80 max-w-3xl mx-auto mb-4">
            {{ __('Saturday, July 5, 2026') }}
        </p>
        <p class="text-lg text-white/70 max-w-2xl mx-auto mb-10">
            {{ __('Parade description') }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.index') }}" class="inline-flex items-center px-8 py-3.5 rounded-full border-2 border-white text-white font-semibold text-base hover:bg-white hover:text-purple-900 transition">
                {{ __('Parade Info & Route') }}
            </a>
        </div>
    </div>
</section>

{{-- RIGHTS SECTION --}}
<section class="py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">{{ __('Human Rights') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    <span class="text-pink-600 dark:text-pink-400">{{ __('Equality is not debated.') }}</span><br>
                    {{ __('It is guaranteed.') }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    {{ __('Rights description') }}
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 rounded-full bg-pink-600 text-white font-semibold hover:bg-pink-700 transition shadow">
                    {{ __('Learn About Our Advocacy') }}
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-2xl bg-gradient-to-br from-pink-100 via-purple-100 to-indigo-100 dark:from-pink-900/20 dark:via-purple-900/20 dark:to-indigo-900/20 flex items-center justify-center p-12">
                    <div class="text-center">
                        <div class="text-8xl sm:text-9xl font-black text-pink-600 dark:text-pink-400 leading-none mb-2">=</div>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('EQUALITY') }}</p>
                        <p class="text-gray-500 dark:text-gray-400 mt-2">{{ __('is a human right') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VOLUNTEER / SUPPORT --}}
<section id="support" class="py-20 sm:py-28 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">{{ __('Get Involved') }}</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ __('Ways to Support Bucharest Pride') }}</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                {{ __('Support subtitle') }}
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center group-hover:bg-purple-200 dark:group-hover:bg-purple-900/50 transition">
                    <svg class="w-8 h-8 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ __('Volunteer') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Volunteer desc') }}</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-purple-700 dark:text-purple-400 hover:underline">{{ __('Volunteer Today →') }}</a>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center group-hover:bg-pink-200 dark:group-hover:bg-pink-900/50 transition">
                    <svg class="w-8 h-8 text-pink-700 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ __('Donate') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Donate desc') }}</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-pink-700 dark:text-pink-400 hover:underline">{{ __('Donate Now →') }}</a>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <svg class="w-8 h-8 text-blue-700 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ __('Sponsor') }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ __('Sponsor desc') }}</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-blue-700 dark:text-blue-400 hover:underline">{{ __('Become a Sponsor →') }}</a>
            </div>
        </div>
    </div>
</section>

{{-- NEWSLETTER --}}
<section class="py-20 sm:py-28">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
        <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">{{ __('Stay Connected') }}</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">{{ __('Keep Pride Loud & Free') }}</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">{{ __('Newsletter desc') }}</p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" @submit.prevent>
            <input type="email" placeholder="{{ __('Enter your email') }}" class="flex-1 px-5 py-3 rounded-full border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent text-sm">
            <button type="submit" class="px-6 py-3 rounded-full bg-purple-700 text-white font-semibold text-sm hover:bg-purple-800 transition shadow">{{ __('Subscribe') }}</button>
        </form>
    </div>
</section>

@include('partials.footer')
</body>
</html>