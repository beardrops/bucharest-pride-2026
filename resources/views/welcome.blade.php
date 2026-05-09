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

{{-- NAVBAR --}}
<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="scrolled ? 'bg-white/95 dark:bg-gray-900/95 backdrop-blur shadow-sm' : 'bg-transparent'">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="/" class="flex items-center gap-2 font-bold text-xl tracking-tight">
                <span class="flex gap-0.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-orange-500 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-400 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-blue-500 inline-block"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-purple-600 inline-block"></span>
                </span>
                <span :class="scrolled ? '' : 'text-white'">Bucharest<span class="font-normal">Pride</span></span>
            </a>

            <div class="hidden lg:flex items-center gap-8">
                <a href="{{ route('events.index') }}"
                   class="text-sm font-medium transition"
                   :class="scrolled ? 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' : 'text-white/80 hover:text-white'">Events</a>
                <a href="#parade"
                   class="text-sm font-medium transition"
                   :class="scrolled ? 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' : 'text-white/80 hover:text-white'">Parade</a>
                <a href="#about"
                   class="text-sm font-medium transition"
                   :class="scrolled ? 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' : 'text-white/80 hover:text-white'">About</a>
                <a href="#support"
                   class="text-sm font-medium transition"
                   :class="scrolled ? 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' : 'text-white/80 hover:text-white'">Support</a>
                <a href="#support"
                   class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold transition"
                   :class="scrolled
                       ? 'bg-purple-700 text-white hover:bg-purple-800'
                       : 'bg-pink-600 text-white hover:bg-pink-700'">Donate</a>
            </div>

            <button @click="open = !open" class="lg:hidden p-2" :class="scrolled ? 'text-gray-900 dark:text-white' : 'text-white'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="open ? 'hidden' : 'inline-flex'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="open ? 'inline-flex' : 'hidden'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" x-cloak class="lg:hidden bg-white dark:bg-gray-900 border-t dark:border-gray-800">
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('events.index') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Events</a>
            <a href="#parade" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Parade</a>
            <a href="#about" class="block text-sm font-medium text-gray-700 dark:text-gray-300">About</a>
            <a href="#support" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Support</a>
            <a href="#support" class="block text-sm font-medium text-purple-700">Donate</a>
        </div>
    </div>
</nav>

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

        <p class="text-xl sm:text-2xl md:text-3xl text-white/90 font-light mb-3">June 27 – July 5, 2026</p>

        <p class="text-lg text-white/80 font-light mb-10 max-w-2xl mx-auto">
            Celebrate diversity. Demand equality. Unite for love.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#events" class="inline-flex items-center px-8 py-3.5 rounded-full bg-white text-purple-900 font-semibold text-base hover:bg-yellow-300 hover:text-purple-900 transition shadow-lg">
                See the Program
            </a>
            <a href="#support" class="inline-flex items-center px-8 py-3.5 rounded-full bg-pink-600 text-white font-semibold text-base hover:bg-pink-500 transition shadow-lg">
                Donate
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
        <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-2">It's getting closer!</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-8">Bucharest Pride 2026</h2>
        <div class="grid grid-cols-4 gap-4 sm:gap-8 max-w-xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-purple-700 dark:text-purple-400" x-text="days">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">Days</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-pink-600 dark:text-pink-400" x-text="hours">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">Hours</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-orange-500 dark:text-orange-400" x-text="minutes">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">Minutes</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm p-4">
                <div class="text-4xl sm:text-5xl font-bold text-green-600 dark:text-green-400" x-text="seconds">00</div>
                <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider">Seconds</div>
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
                <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">About</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    Educate.<br>
                    <span class="text-pink-600 dark:text-pink-400">Commemorate.</span><br>
                    Celebrate. Liberate.
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    Bucharest Pride is the largest LGBTQ+ gathering in Romania — bringing together tens of thousands
                    of community members, allies, and advocates every June in the heart of Bucharest.
                </p>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">
                    We march for equality, visibility, and the fundamental right to love freely. From the Pride Parade
                    through the city center to community stages, cultural events, and human rights summits —
                    Bucharest Pride is a week-long celebration of who we are.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-purple-700 dark:text-purple-400">50K+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">Annual Attendees</div>
                </div>
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-blue-700 dark:text-blue-400">20+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">Years of Pride</div>
                </div>
                <div class="bg-gradient-to-br from-green-100 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-green-700 dark:text-green-400">100+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">Events & Activities</div>
                </div>
                <div class="bg-gradient-to-br from-yellow-100 to-orange-100 dark:from-yellow-900/30 dark:to-orange-900/30 rounded-2xl p-6 sm:p-8 text-center">
                    <div class="text-4xl sm:text-5xl font-bold text-orange-600 dark:text-orange-400">#1</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">Largest in Romania</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- EVENTS HIGHLIGHT --}}
<section id="events" class="py-20 sm:py-28 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">Program</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Events You Can't Miss</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                From the main stage to community workshops, cultural events to the iconic parade —
                here are the highlights of Bucharest Pride 2026.
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-400 transition">Opening Ceremony</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">Kick off Pride Week with live performances, speeches from community leaders, and a vibrant celebration at Piața Constituției.</p>
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition">Human Rights Summit</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">A three-day conference on LGBTQ+ rights in Romania and Eastern Europe, featuring activists, policymakers, and academics.</p>
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition">Pride Festival</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-2">Live music, DJs, drag performances, and community stages across multiple venues in the city center.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('events.index') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-purple-700 text-white font-semibold hover:bg-purple-800 transition shadow">
                See All Events
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
        <p class="text-sm font-semibold uppercase tracking-widest text-yellow-300 mb-3">Pride Parade</p>
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
            March with Us
        </h2>
        <p class="text-xl text-white/80 max-w-3xl mx-auto mb-4">
            Saturday, July 5, 2026
        </p>
        <p class="text-lg text-white/70 max-w-2xl mx-auto mb-10">
            The Bucharest Pride Parade is the largest LGBTQ+ demonstration in Romania.
            Thousands will march from Piața Universității to Piața Victoriei — demanding equality,
            visibility, and respect. Be part of history.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.index') }}" class="inline-flex items-center px-8 py-3.5 rounded-full border-2 border-white text-white font-semibold text-base hover:bg-white hover:text-purple-900 transition">
                Parade Info & Route
            </a>
        </div>
    </div>
</section>

{{-- RIGHTS SECTION --}}
<section class="py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">Human Rights</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    <span class="text-pink-600 dark:text-pink-400">Equality</span> is not debated.<br>
                    It is <span class="text-pink-600 dark:text-pink-400">guaranteed</span>.
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    To defend the rights of LGBTQ+ people is to defend dignity, freedom, and justice for all.
                    In Romania, we continue to fight for marriage equality, protection from discrimination,
                    and the right to live openly and authentically.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 rounded-full bg-pink-600 text-white font-semibold hover:bg-pink-700 transition shadow">
                    Learn About Our Advocacy
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-2xl bg-gradient-to-br from-pink-100 via-purple-100 to-indigo-100 dark:from-pink-900/20 dark:via-purple-900/20 dark:to-indigo-900/20 flex items-center justify-center p-12">
                    <div class="text-center">
                        <div class="text-8xl sm:text-9xl font-black text-pink-600 dark:text-pink-400 leading-none mb-2">=</div>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">EQUALITY</p>
                        <p class="text-gray-500 dark:text-gray-400 mt-2">is a human right</p>
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
            <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">Get Involved</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Ways to Support Bucharest Pride</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                From volunteering your time to becoming a sponsor — every contribution makes our community stronger.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center group-hover:bg-purple-200 dark:group-hover:bg-purple-900/50 transition">
                    <svg class="w-8 h-8 text-purple-700 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Volunteer</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Join our team of dedicated volunteers and help make Bucharest Pride a success. From parade marshals to event support.</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-purple-700 dark:text-purple-400 hover:underline">Volunteer Today →</a>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-pink-100 dark:bg-pink-900/30 flex items-center justify-center group-hover:bg-pink-200 dark:group-hover:bg-pink-900/50 transition">
                    <svg class="w-8 h-8 text-pink-700 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Donate</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Your donation helps us produce the parade and celebration, and supports local LGBTQ+ organizations year-round.</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-pink-700 dark:text-pink-400 hover:underline">Donate Now →</a>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm hover:shadow-md transition text-center group">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <svg class="w-8 h-8 text-blue-700 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Sponsor</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Partner with Bucharest Pride for high-visibility brand alignment with the largest LGBTQ+ event in Romania.</p>
                <a href="#" class="inline-block mt-6 text-sm font-semibold text-blue-700 dark:text-blue-400 hover:underline">Become a Sponsor →</a>
            </div>
        </div>
    </div>
</section>

{{-- NEWSLETTER --}}
<section class="py-20 sm:py-28">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
        <p class="text-sm font-semibold uppercase tracking-widest text-pink-600 dark:text-pink-400 mb-3">Stay Connected</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Keep Pride Loud & Free</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">Sign up for our newsletter to get the latest updates on Bucharest Pride events, news, and community stories.</p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" @submit.prevent>
            <input type="email" placeholder="Enter your email" class="flex-1 px-5 py-3 rounded-full border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent text-sm">
            <button type="submit" class="px-6 py-3 rounded-full bg-purple-700 text-white font-semibold text-sm hover:bg-purple-800 transition shadow">Subscribe</button>
        </form>
    </div>
</section>

{{-- FOOTER --}}
<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center gap-2 font-bold text-xl text-white mb-4">
                    <span class="flex gap-0.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-red-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-orange-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-400 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-green-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-500 inline-block"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-purple-600 inline-block"></span>
                    </span>
                    BucharestPride
                </div>
                <p class="text-sm text-gray-400 leading-relaxed">Educate. Commemorate. Celebrate. Liberate.</p>
                <p class="text-sm text-gray-500 mt-4">Bucharest, Romania</p>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">Event Info</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('events.index') }}" class="hover:text-white transition">Program</a></li>
                    <li><a href="#parade" class="hover:text-white transition">Parade</a></li>
                    <li><a href="#" class="hover:text-white transition">Accessibility</a></li>
                    <li><a href="#" class="hover:text-white transition">Safety</a></li>
                    <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">Get Involved</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Volunteer</a></li>
                    <li><a href="#" class="hover:text-white transition">Partnerships</a></li>
                    <li><a href="#" class="hover:text-white transition">Sponsorship</a></li>
                    <li><a href="#" class="hover:text-white transition">Donate</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4 text-sm uppercase tracking-wider">About</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#about" class="hover:text-white transition">Our Story</a></li>
                    <li><a href="#" class="hover:text-white transition">Team</a></li>
                    <li><a href="#" class="hover:text-white transition">Press Room</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
                <div class="flex gap-3 mt-6">
                    <a href="#" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-pink-600 transition flex items-center justify-center" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-blue-500 transition flex items-center justify-center" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-purple-500 transition flex items-center justify-center" aria-label="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-gray-500">
            <p>&copy; {{ date('Y') }} Bucharest Pride. All Rights Reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
                <a href="#" class="hover:text-white transition">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
