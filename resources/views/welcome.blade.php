<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') === 'corporate' ? 'theme-corporate' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body antialiased bg-white text-pride-black">

@include('partials.navbar')

{{-- HERO --}}
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="/images/hero_image.jpeg" alt="" class="w-full h-full object-cover">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-pride-black/70 via-pride-black/30 to-transparent"></div>
    <div class="relative z-10 w-full max-w-[1180px] mx-auto px-6 lg:px-8 py-24">
        <div class="max-w-3xl">
            <h1 class="font-head font-bold text-white text-7xl sm:text-8xl lg:text-[8rem] leading-[0.85] -tracking-[0.02em] mb-2">
                BUCHAREST<br>
                <span class="text-pride-pink lg:text-[9rem]">PRIDE</span><br>
                2026
            </h1>
            <p class="font-head font-semibold text-white text-xl sm:text-2xl lg:text-7xl mt-6 mb-6 tracking-[0.08em]">
                {{ __('All of us')}}
            </p>
            <p class="font-head font-semibold text-white text-sm lg:text-3xl mb-8 tracking-[0.15em]">3 — 13 IUNIE 2026</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#support" class="btn-pri">{{ __('See the Program') }}</a>
                <a href="#support" class="btn-sec">{{ __('Donate') }}</a>
            </div>
        </div>
    </div>
</section>

{{-- SUPPORT / GET INVOLVED --}}
<section id="support" class="py-24 sm:py-28 bg-pride-pink relative clip-btm clip-top">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-5 gap-10 items-start">
            <div class="lg:col-span-2 lg:sticky lg:top-32">
                <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl lg:text-6xl uppercase leading-[0.9]">SUSȚINE<br>BUCHAREST<br>PRIDE</h2>
            </div>
            <div class="lg:col-span-3 grid md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 gap-5">
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col rounded-sm hover:shadow-[4px_4px_8px_rgba(0,0,0,0.2)]">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-pride-pink/20">
                            <svg class="w-8 h-8 text-pride-pink relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Volunteer') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Volunteer desc') }}</p>
                        <p class="mt-auto self-center text-sm text-pride-black">Learn more →</p>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col rounded-sm hover:shadow-[4px_4px_8px_rgba(0,0,0,0.2)]">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-pride-pink/20">
                            <svg class="w-8 h-8 text-pride-pink relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Donate') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Donate desc') }}</p>
                        <p class="mt-auto self-center text-sm text-pride-black">Learn more →</p>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col rounded-sm hover:shadow-[4px_4px_8px_rgba(0,0,0,0.2)]">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-pride-pink/20">
                            <svg class="w-8 h-8 text-pride-pink relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 001.06.44l1.19 1.189a3 3 0 00-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75-.75v3.75c0 .415.336.75.75.75z"/>
                            </svg>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Sponsor') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Sponsor desc') }}</p>
                        <p class="mt-auto self-center text-sm text-pride-black">Learn more →</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- STATS / ABOUT --}}
<section class="py-24 sm:py-28 bg-pride-black relative clip-top">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-head font-bold text-white text-5xl sm:text-6xl lg:text-7xl leading-[0.9] -tracking-[0.02em]">
                    EDUCATE.<br>
                    COMMEMORATE.<br>
                    CELEBRATE.<br>
                    <span class="text-pride-pink">LIBERATE.</span>
                </h2>
                <p class="text-white/60 text-base sm:text-lg mt-8 max-w-lg leading-relaxed">{{ __('About description') }}</p>
                <p class="text-white/60 text-base sm:text-lg mt-4 max-w-lg leading-relaxed">{{ __('About description 2') }}</p>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="border border-white/20 p-8 text-center">
                    <div class="font-head font-bold text-5xl text-pride-pink">50K+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('Annual Attendees') }}</p>
                </div>
                <div class="border border-white/20 p-8 text-center">
                    <div class="font-head font-bold text-5xl text-white">20+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('Years of Pride') }}</p>
                </div>
                <div class="border border-white/20 p-8 text-center">
                    <div class="font-head font-bold text-5xl text-pride-pink">100+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('Events & Activities') }}</p>
                </div>
                <div class="border border-white/20 p-8 text-center">
                    <div class="font-head font-bold text-5xl text-white">#1</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('Largest in Romania') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- COUNTDOWN --}}
<section class="py-20 sm:py-24 bg-pride-beige relative clip-btm">
    <div x-data="countdown('2026-06-13T17:00:00')" x-init="init(); setInterval(() => init(), 1000)"
         class="max-w-[1180px] mx-auto px-6 lg:px-8 text-center relative z-10">
        <p class="font-head font-semibold text-pride-pink text-sm mb-3 tracking-[0.15em]">{{ __("It's getting closer!") }}</p>
        <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl mb-12">BUCHAREST PRIDE 2026</h2>
        <div class="grid grid-cols-4 gap-4 sm:gap-6 max-w-2xl mx-auto">
            <div class="border-2 border-pride-pink p-5 sm:p-6">
                <div class="font-head font-bold text-5xl sm:text-6xl tabular-nums text-pride-black" x-text="days">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Days') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6">
                <div class="font-head font-bold text-5xl sm:text-6xl tabular-nums text-pride-black" x-text="hours">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Hours') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6">
                <div class="font-head font-bold text-5xl sm:text-6xl tabular-nums text-pride-black" x-text="minutes">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Minutes') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6">
                <div class="font-head font-bold text-5xl sm:text-6xl tabular-nums text-pride-black" x-text="seconds">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Seconds') }}</p>
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

{{-- PARADE --}}
<section id="parade" class="py-24 sm:py-28 bg-pride-pink relative overflow-hidden clip-top">
    <div class="absolute inset-0 halftone"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-pride-pink/0 via-pride-pink/0 to-pride-black/20"></div>
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 text-center relative z-10">
        <p class="font-head font-semibold text-white/70 text-sm mb-3 tracking-[0.15em]">{{ __('Pride Parade') }}</p>
        <h2 class="font-head font-bold text-white text-5xl sm:text-6xl lg:text-7xl leading-[0.9] mb-6">{{ __('March with Us') }}</h2>
        <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto mb-2 font-light">{{ __('Saturday, July 5, 2026') }}</p>
        <p class="text-white/70 max-w-xl mx-auto mb-10 leading-relaxed">{{ __('Parade description') }}</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('events.index') }}" class="btn-black">{{ __('Parade Info & Route') }}</a>
        </div>
    </div>
</section>

{{-- EVENTS --}}
<section id="events" class="py-24 sm:py-28 bg-pride-beige relative clip-btm">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <p class="font-head font-semibold text-pride-pink text-sm mb-3 tracking-[0.15em]">{{ __('Program') }}</p>
            <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl lg:text-6xl">{{ __("Events You Can't Miss") }}</h2>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white border-2 border-pride-black overflow-hidden group">
                <div class="h-48 bg-pride-pink flex items-center justify-center relative">
                    <div class="absolute inset-0 halftone opacity-40"></div>
                    <svg class="w-14 h-14 text-white/70 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0A2.701 2.701 0 003 15.546M21 15.546V5.25A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25v10.296m18 0v4.454A2.25 2.25 0 0118.75 22H5.25A2.25 2.25 0 013 19.75v-4.454"/>
                    </svg>
                </div>
                <div class="p-6">
                    <p class="font-head font-semibold text-xs text-pride-pink mb-2 tracking-[0.12em]">27 IUNIE</p>
                    <h3 class="font-head font-semibold text-lg text-pride-black mb-2 uppercase">{{ __('Opening Ceremony') }}</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ __('Opening Ceremony desc') }}</p>
                </div>
            </div>
            <div class="bg-white border-2 border-pride-black overflow-hidden group">
                <div class="h-48 bg-pride-black flex items-center justify-center relative">
                    <div class="absolute inset-0 halftone opacity-20"></div>
                    <svg class="w-14 h-14 text-white/70 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <p class="font-head font-semibold text-xs text-pride-pink mb-2 tracking-[0.12em]">28 — 30 IUNIE</p>
                    <h3 class="font-head font-semibold text-lg text-pride-black mb-2 uppercase">{{ __('Human Rights Summit') }}</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ __('Human Rights Summit desc') }}</p>
                </div>
            </div>
            <div class="bg-white border-2 border-pride-black overflow-hidden group">
                <div class="h-48 bg-pride-pink flex items-center justify-center relative">
                    <div class="absolute inset-0 halftone opacity-40"></div>
                    <svg class="w-14 h-14 text-white/70 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/>
                    </svg>
                </div>
                <div class="p-6">
                    <p class="font-head font-semibold text-xs text-pride-pink mb-2 tracking-[0.12em]">1 — 5 IULIE</p>
                    <h3 class="font-head font-semibold text-lg text-pride-black mb-2 uppercase">{{ __('Pride Festival') }}</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ __('Pride Festival desc') }}</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('events.index') }}" class="btn-pri">{{ __('See All Events') }} &rarr;</a>
        </div>
    </div>
</section>

{{-- NEWSLETTER --}}
<section class="py-20 sm:py-24 bg-pride-pink relative overflow-hidden clip-top">
    <div class="absolute inset-0 halftone"></div>
    <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
        <h2 class="font-head font-bold text-white text-4xl sm:text-5xl lg:text-6xl leading-[0.9] mb-4">KEEP PRIDE<br>LOUD &amp; FREE</h2>
        <p class="text-white/80 mb-8 max-w-md mx-auto leading-relaxed">{{ __('Newsletter desc') }}</p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" @submit.prevent>
            <input type="email" placeholder="{{ __('Enter your email') }}" class="flex-1 px-5 py-3 border-2 border-white bg-transparent text-white placeholder-white/60 text-sm uppercase tracking-wider focus:outline-none focus:bg-white/10 font-head">
            <button type="submit" class="btn-black border-white min-w-[140px]">{{ __('Subscribe') }}</button>
        </form>
    </div>
</section>

@include('partials.footer')
</body>
</html>
