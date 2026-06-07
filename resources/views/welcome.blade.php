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
                        {{ __('BUCHAREST') }}<br>
                <span class="text-pride-pink lg:text-[9rem]">PRIDE</span><br>
                2026
            </h1>
            <p class="font-head font-semibold text-white text-xl sm:text-2xl lg:text-7xl mt-6 mb-6 tracking-[0.08em]">
                {{ __('All of us')}}
            </p>
            <p class="font-head font-semibold text-white text-sm lg:text-3xl mb-8 tracking-[0.15em]">3 — 13 IUNIE 2026</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#support" class="btn-pri">{{ __('Program') }}</a>
                <a href="#support" class="btn-sec">{{ __('Donează') }}</a>
            </div>
        </div>
    </div>
</section>

{{-- SUPPORT / GET INVOLVED --}}
<section id="support" class="sm:py-28 bg-pride-pink relative clip-top bp-about">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-6 gap-10 items-start">
            <div class="lg:col-span-2 lg:sticky lg:top-32">
                <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl lg:text-6xl uppercase leading-[1.2]">{{ __('SUSȚINE') }}<br>BUCHAREST<br>PRIDE</h2>
            </div>
            <div class="lg:col-span-4 grid md:grid-cols-3 gap-5 items-stretch">
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col hover:-translate-y-1 hover:shadow-[4px_4px_0_0_rgba(0,0,0,1)] transition-transform duration-800 ease-in-out">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full">
                            <span class="material-symbols-outlined about-card-icon">
								partner_heart
							</span>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Voluntari') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Descriere Voluntari') }}</p>
                        <p class="mt-auto self-center text-sm text-pride-black font-bold">{{ __('IMPLICĂ-TE') }}
							<span class="inline-block ml-1 relative top-1.5">
								<i class="material-icons">arrow_right_alt</i>
							</span>
						</p>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col hover:-translate-y-1 hover:shadow-[4px_4px_0_0_rgba(0,0,0,1)] transition-transform duration-800 ease-in-out">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full">
                            <span class="material-symbols-outlined about-card-icon">
								volunteer_activism
							</span>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Donatori') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Descriere Donatori') }}</p>
							<p class="mt-auto self-center text-sm text-pride-black font-bold">{{ __('DONEAZĂ') }}
								<span class="inline-block ml-1 relative top-1.5">
									<i class="material-icons">arrow_right_alt</i>
								</span>
							</p>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="bg-white p-8 text-center support-card relative overflow-hidden group flex flex-col hover:-translate-y-1 hover:shadow-[4px_4px_0_0_rgba(0,0,0,1)] transition-transform duration-800 ease-in-out">
                        <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full">
                            <span class="material-symbols-outlined about-card-icon">
								handshake
							</span>
                        </div>
                        <h3 class="font-head font-semibold text-xl text-pride-black mb-3 uppercase relative z-10">{{ __('Parteneri') }}</h3>
                        <p class="text-pride-black/70 text-sm leading-relaxed mb-6 relative z-10">{{ __('Descriere Parteneri') }}</p>
                        <p class="mt-auto self-center text-sm text-pride-black font-bold">{{ __('SUSȚINE')}}
							<span class="inline-block ml-1 relative top-1.5">
								<i class="material-icons">arrow_right_alt</i>
							</span>
						</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- STATS / ABOUT --}}
<section class="py-24 sm:py-28 bg-pride-black relative">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-6 gap-16 items-center">
            <div class="lg:col-span-2 lg:sticky lg:top-32">
                <h2 class="font-head font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-[0.9] -tracking-[0.02em]">
                            {{ __('Bucharest Pride') }}<br>
                    <span class="text-pride-pink">{{ __('by ACCEPT') }}</span>
                </h2>
                <p class="text-white text-sm sm:text-lg mt-8 max-w-lg leading-relaxed">{{ __('Descriere Despre') }}</p>
            </div>
            <div class="lg:col-span-4 grid md:grid-cols-3 gap-5 items-stretch lg:grid-cols-2 self-end font-sm">
                <div class="border border-white p-8 text-center">
                    <div class="font-head font-bold text-5xl text-pride-pink">+20</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('ANI DE ISTORIE') }}</p>
                </div>
                <div class="border border-white p-8 text-center">
                    <div class="font-head font-bold text-5xl text-white">500+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('EVENIMENTE') }}</p>
                </div>
                <div class="border border-white p-8 text-center">
                    <div class="font-head font-bold text-5xl text-white">300+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('PARTENERI') }}</p>
                </div>
                <div class="border border-white p-8 text-center">
                    <div class="font-head font-bold text-5xl text-pride-pink">35 000+</div>
                    <p class="font-head font-medium text-xs text-white/50 mt-2 tracking-[0.12em] uppercase">{{ __('PARTICIPANȚI') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- COUNTDOWN --}}
<section class="py-20 sm:py-24 bg-pride-beige relative">
    <div x-data="countdown('2026-06-13T17:00:00')" x-init="init(); setInterval(() => init(), 1000)"
         class="max-w-[1180px] mx-auto px-6 lg:px-8 text-center relative z-10">
        <p class="font-head font-semibold text-pride-pink text-sm mb-3 tracking-[0.15em]">{{ __("It's getting closer!") }}</p>
        <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl mb-12">BUCHAREST PRIDE 2026</h2>
        <div class="grid grid-cols-4 gap-4 sm:gap-6 max-w-2xl mx-auto">
            <div class="border-2 border-pride-pink p-5 sm:p-6 text-center w-[6.5rem]">
                <div class="font-head font-bold text-5xl sm:text-6xl text-pride-black tracking-tight"
                     style="font-variant-numeric: tabular-nums;"
                     x-text="days.padStart(2, '0')">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Days') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6 text-center w-[6.5rem]">
                <div class="font-head font-bold text-5xl sm:text-6xl text-pride-black tracking-tight"
                     style="font-variant-numeric: tabular-nums;"
                     x-text="hours.padStart(2, '0')">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Hours') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6 text-center w-[6.5rem]">
                <div class="font-head font-bold text-5xl sm:text-6xl text-pride-black tracking-tight"
                     style="font-variant-numeric: tabular-nums;"
                     x-text="minutes.padStart(2, '0')">00</div>
                <p class="font-head font-medium text-xs text-gray-500 mt-1 tracking-[0.12em] uppercase">{{ __('Minutes') }}</p>
            </div>
            <div class="border-2 border-pride-pink p-5 sm:p-6 text-center w-[6.5rem]">
                <div class="font-head font-bold text-5xl sm:text-6xl text-pride-black tracking-tight"
                     style="font-variant-numeric: tabular-nums;"
                     x-text="seconds.padStart(2, '0')">00</div>
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
                const update = () => {
                    const target = new Date(targetDate).getTime();
                    const now = new Date().getTime();
                    const diff = Math.max(0, target - now);
                    this.days = Math.floor(diff / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                    this.hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                    this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                    this.seconds = Math.floor((diff % (1000 * 60)) / 1000).toString().padStart(2, '0');
                }
                update();
                setInterval(update, 1000);
            }
        }
    }
</script>

{{-- PARADE --}}
<section id="parade" class="py-24 sm:py-28 bg-pride-pink relative overflow-hidden">

    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 items-center">
            {{-- Left Column (2 cols) --}}
            <div class="lg:col-span-2">
                <h2 class="font-head font-bold text-white text-5xl sm:text-6xl lg:text-7xl leading-[0.9] mb-6">{{ __('Marșul Bucharest PRIDE') }}</h2>

                <div class="space-y-4">
                    <p class="text-white/70 max-w-xl mx-auto mb-10 leading-relaxed">{{ __('Descriere Marș') }}</p>
					<p class="text-white/70 max-w-xl mx-auto leading-relaxed">16:00 - {{ __('Adunare la Piața Victorie') }}</p>
					<p class="text-white/70 max-w-xl mx-auto leading-relaxed">17:00 - {{ __('Pornire Bucharest PRIDE') }}</p>
					<p class="text-white/70 max-w-xl mx-auto leading-relaxed">19:00 - {{ __('Sosire la Pride Park | Izvor') }}</p>
					<p class="text-white/70 max-w-xl mx-auto leading-relaxed">19:30 - {{ __('Revendicări & Pride Party') }}</p>
                </div>
            </div>

            {{-- Right Column (4 cols) --}}
            <div class="lg:col-span-4 flex justify-center lg:justify-end">
                <img src="/images/traseu_mars.png"
                     alt="{{ __('Bucharest Pride Parade Route') }}"
                     class="w-full max-w-full lg:max-w-none rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

{{-- EVENTS --}}
<section id="events" class="py-24 sm:py-28 bg-pride-beige relative">
    <div class="max-w-[1180px] mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <p class="font-head font-semibold text-pride-pink text-sm mb-3 tracking-[0.15em]">{{ __('Program') }}</p>
            <h2 class="font-head font-bold text-pride-black text-4xl sm:text-5xl lg:text-6xl">{{ __("Events You Can't Miss") }}</h2>
        </div>

        @if($events->count())
        <div x-data="eventsCarousel(@js($events))" x-init="init()" class="relative overflow-hidden">
            <div class="overflow-hidden">
                <div class="flex gap-6 transition-transform duration-500 ease-in-out"
                     x-ref="track"
                     @mouseenter="pause()"
                     @mouseleave="resume()">
                    <template x-for="event in events" :key="event.slug">
                        <a :href="'/events/' + event.slug" class="min-w-[calc(33.333%-16px)] bg-white border-2 border-pride-black overflow-hidden group block">
                            <div class="h-48 relative overflow-hidden" :class="event.image ? '' : (event.id % 2 === 0 ? 'bg-pride-pink' : 'bg-pride-black')">
                                <template x-if="event.image">
                                    <img :src="'/storage/' + event.image" :alt="event.title" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </template>
                                <template x-if="!event.image">
                                    <div class="absolute inset-0 halftone opacity-40"></div>
                                </template>
                                <div class="absolute top-3 left-3 bg-pride-pink text-white text-xs font-head font-semibold px-3 py-1" x-text="formatDate(event.start_date)"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="font-head font-semibold text-lg text-pride-black mb-2 uppercase" x-text="event.title"></h3>
                                <p class="text-sm text-gray-600 leading-relaxed mb-3 line-clamp-2" x-text="truncate(event.description, 120)"></p>
                                <div class="flex items-center gap-1 text-xs text-pride-pink font-medium mb-3">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span x-text="event.location"></span>
                                </div>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
            <div class="flex items-center justify-center gap-4 mt-8">
                <button @click="prev" class="w-12 h-12 flex items-center justify-center border-2 border-pride-black hover:bg-pride-black hover:text-white transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <a href="{{ route('events.index') }}" class="btn-pri">{{ __('See All Events') }} &rarr;</a>
                <button @click="next" class="w-12 h-12 flex items-center justify-center border-2 border-pride-black hover:bg-pride-black hover:text-white transition duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-gray-500 text-lg">{{ __('No events scheduled yet.') }}</p>
        </div>
        @endif
    </div>
</section>

<script>
function eventsCarousel(eventsData) {
    return {
        events: eventsData,
        currentIndex: 0,
        itemsPerView: 3,
        isPaused: false,
        autoplayInterval: null,

        init() {
            this.updateItemsPerView();
            window.addEventListener('resize', () => {
                this.updateItemsPerView();
            });
            this.startAutoplay();
        },

        updateItemsPerView() {
            const width = window.innerWidth;
            if (width < 768) {
                this.itemsPerView = 1;
            } else if (width < 1024) {
                this.itemsPerView = 2;
            } else {
                this.itemsPerView = 3;
            }
            this.updateTransform();
        },

        prev() {
            this.currentIndex--;
            if (this.currentIndex < 0) {
                this.currentIndex = this.totalPages - 1;
            }
            this.updateTransform();
        },

        next() {
            this.currentIndex++;
            if (this.currentIndex >= this.totalPages) {
                this.currentIndex = 0;
            }
            this.updateTransform();
        },

        get totalPages() {
            return Math.max(1, this.events.length - this.itemsPerView + 1);
        },

        updateTransform() {
            const track = this.$refs.track;
            if (!track) return;
            const gap = 24;
            const containerWidth = track.parentElement.offsetWidth;
            const itemWidth = (containerWidth - (this.itemsPerView - 1) * gap) / this.itemsPerView;
            const translateX = -(this.currentIndex * (itemWidth + gap));
            track.style.transform = `translateX(${translateX}px)`;
        },

        startAutoplay() {
            if (this.autoplayInterval) clearInterval(this.autoplayInterval);
            this.autoplayInterval = setInterval(() => {
                if (!this.isPaused) {
                    this.next();
                }
            }, 4000);
        },

        pause() {
            this.isPaused = true;
        },

        resume() {
            this.isPaused = false;
        },

        formatDate(dateStr) {
            if (!dateStr) return '';
            const months = ['Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const d = new Date(dateStr);
            return d.getDate() + ' ' + months[d.getMonth()];
        },

        truncate(str, length) {
            if (!str) return '';
            if (str.length <= length) return str;
            return str.substring(0, length).trim() + '...';
        }
    };
}
</script>

{{-- NEWSLETTER --}}
<section class="py-20 sm:py-24 bg-pride-pink relative overflow-hidden">
    <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
        <h2 class="font-head font-bold text-white text-2xl sm:text-3xl lg:text-4xl leading-[0.9] mb-4">{{ __('Fii la curent cu toate noutățile ACCEPT') }}</h2>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" @submit.prevent>
            <input type="email" placeholder="{{ __('Enter your email') }}" class="flex-1 px-5 py-3 border-2 border-white bg-transparent text-white placeholder-white/60 text-sm uppercase tracking-wider focus:outline-none focus:bg-white/10 font-head">
            <button type="submit" class="btn-black border-white min-w-[140px]">{{ __('Trimite') }}</button>
        </form>
    </div>
</section>

@include('partials.footer')
</body>
</html>
