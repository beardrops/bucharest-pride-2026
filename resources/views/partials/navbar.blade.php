<nav x-data="{ open: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="scrolled ? 'bg-white/95 dark:bg-pride-black/95 backdrop-blur shadow-sm' : 'bg-pride-black/30 backdrop-blur-sm border-b border-white/10'">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                <img src="/images/logo_bucharest_pride.png" alt="{{ __('BucharestPride') }}" class="h-8 w-auto" :class="scrolled ? '' : 'brightness-0 invert'">
            </a>
            <div class="hidden lg:flex items-center gap-6">
                {{-- About Us --}}
                <div class="relative" x-data="{ open: false, timer: null }"
                     @mouseenter="clearTimeout(timer); open = true"
                     @mouseleave="timer = setTimeout(() => open = false, 150)">
                    <a href="{{ route('about') }}"
                       class="flex items-center gap-1 text-sm font-medium transition whitespace-nowrap"
                       :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">
                        {{ __('About') }}
                        <svg class="w-3 h-3" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" x-cloak
                         @mouseenter="clearTimeout(timer); open = true"
                         @mouseleave="timer = setTimeout(() => open = false, 150)"
                         class="absolute left-0 mt-2 bg-white dark:bg-pride-black rounded-xl shadow-lg border dark:border-pride-black py-2 min-w-[200px] z-50">
                        <a href="{{ route('about') }}#accept-organization" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Accept Organization') }}</a>
                        <a href="{{ route('about') }}#bucharest-pride" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('BucharestPride') }}</a>
                        <a href="{{ route('about') }}#the-team" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('The Team') }}</a>
                    </div>
                </div>

                {{-- Bucharest Pride 2026 --}}
                <div class="relative" x-data="{ open: false, timer: null }"
                     @mouseenter="clearTimeout(timer); open = true"
                     @mouseleave="timer = setTimeout(() => open = false, 150)">
                    <a href="{{ route('pride-2026') }}"
                       class="flex items-center gap-1 text-sm font-medium transition whitespace-nowrap"
                       :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">
                        Bucharest Pride 2026
                        <svg class="w-3 h-3" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" x-cloak
                         @mouseenter="clearTimeout(timer); open = true"
                         @mouseleave="timer = setTimeout(() => open = false, 150)"
                         class="absolute left-0 mt-2 bg-white dark:bg-pride-black rounded-xl shadow-lg border dark:border-pride-black py-2 min-w-[200px] z-50">
                        <a href="{{ route('pride-2026') }}#manifest" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Manifest') }}</a>
                        <a href="{{ route('pride-2026') }}#march" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('March') }}</a>
                    </div>
                </div>

                <a href="{{ route('events.index') }}"
                   class="text-sm font-medium transition whitespace-nowrap"
                   :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">{{ __('Events') }}</a>

                {{-- Get Involved --}}
                <div class="relative" x-data="{ open: false, timer: null }"
                     @mouseenter="clearTimeout(timer); open = true"
                     @mouseleave="timer = setTimeout(() => open = false, 150)">
                    <a href="{{ route('get-involved') }}"
                       class="flex items-center gap-1 text-sm font-medium transition whitespace-nowrap"
                       :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">
                        {{ __('Get Involved') }}
                        <svg class="w-3 h-3" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                    <div x-show="open" x-cloak
                         @mouseenter="clearTimeout(timer); open = true"
                         @mouseleave="timer = setTimeout(() => open = false, 150)"
                         class="absolute left-0 mt-2 bg-white dark:bg-pride-black rounded-xl shadow-lg border dark:border-pride-black py-2 min-w-[200px] z-50">
                        <a href="{{ route('get-involved') }}#volunteer" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Volunteer') }}</a>
                        <a href="{{ route('get-involved') }}#sponsors" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Sponsors') }}</a>
                        <a href="{{ route('get-involved') }}#donations" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Donations') }}</a>
                        <a href="{{ route('get-involved') }}#community" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700">{{ __('Community') }}</a>
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                   class="text-sm font-medium transition whitespace-nowrap"
                   :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">{{ __('Contact') }}</a>

                {{-- Language Switcher --}}
                <div class="relative" x-data="{ langOpen: false }">
                    <button @click="langOpen = !langOpen" class="flex items-center gap-1 text-sm font-medium transition"
                            :class="scrolled ? 'text-gray-700 dark:text-white/70 hover:text-pride-black dark:hover:text-white' : 'text-white/80 hover:text-white'">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="uppercase">{{ app()->getLocale() }}</span>
                        <svg class="w-3 h-3" :class="langOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="langOpen" @click.away="langOpen = false" x-cloak class="absolute right-0 mt-2 bg-white dark:bg-pride-black rounded-xl shadow-lg border dark:border-pride-black py-1 min-w-[130px] z-50">
                        <a href="{{ route('locale.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700 {{ app()->getLocale() === 'en' ? 'font-semibold text-pride-navy dark:text-pride-pink' : '' }}">{{ __('English') }}</a>
                        <a href="{{ route('locale.switch', 'ro') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-white/70 hover:bg-pride-gray dark:hover:bg-gray-700 {{ app()->getLocale() === 'ro' ? 'font-semibold text-pride-navy dark:text-pride-pink' : '' }}">{{ __('Română') }}</a>
                    </div>
                </div>
            </div>

            <button @click="open = !open" class="lg:hidden p-2" :class="scrolled ? 'text-pride-black dark:text-white' : 'text-white'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="open ? 'hidden' : 'inline-flex'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="open ? 'inline-flex' : 'hidden'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" x-cloak class="lg:hidden bg-white dark:bg-pride-black border-t dark:border-pride-black">
        <div class="px-4 py-4 space-y-3">
            <div x-data="{ mobAbout: false }">
                <button @click="mobAbout = !mobAbout" class="flex items-center justify-between w-full text-sm font-medium text-gray-700 dark:text-white/70">
                    <span>{{ __('About') }}</span>
                    <svg class="w-3 h-3" :class="mobAbout ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="mobAbout" class="ml-4 mt-2 space-y-2">
                    <a href="{{ route('about') }}" class="block text-sm text-gray-600 dark:text-white/60">{{ __('About') }}</a>
                    <a href="{{ route('about') }}#accept-organization" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Accept Organization') }}</a>
                    <a href="{{ route('about') }}#bucharest-pride" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('BucharestPride') }}</a>
                    <a href="{{ route('about') }}#the-team" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('The Team') }}</a>
                </div>
            </div>
            <div x-data="{ mobPride: false }">
                <button @click="mobPride = !mobPride" class="flex items-center justify-between w-full text-sm font-medium text-gray-700 dark:text-white/70">
                    <span>Bucharest Pride 2026</span>
                    <svg class="w-3 h-3" :class="mobPride ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="mobPride" class="ml-4 mt-2 space-y-2">
                    <a href="{{ route('pride-2026') }}" class="block text-sm text-gray-600 dark:text-white/60">Bucharest Pride 2026</a>
                    <a href="{{ route('pride-2026') }}#manifest" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Manifest') }}</a>
                    <a href="{{ route('pride-2026') }}#march" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('March') }}</a>
                </div>
            </div>
            <a href="{{ route('events.index') }}" class="block text-sm font-medium text-gray-700 dark:text-white/70">{{ __('Events') }}</a>
            <div x-data="{ mobInvolved: false }">
                <button @click="mobInvolved = !mobInvolved" class="flex items-center justify-between w-full text-sm font-medium text-gray-700 dark:text-white/70">
                    <span>{{ __('Get Involved') }}</span>
                    <svg class="w-3 h-3" :class="mobInvolved ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="mobInvolved" class="ml-4 mt-2 space-y-2">
                    <a href="{{ route('get-involved') }}" class="block text-sm text-gray-600 dark:text-white/60">{{ __('Get Involved') }}</a>
                    <a href="{{ route('get-involved') }}#volunteer" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Volunteer') }}</a>
                    <a href="{{ route('get-involved') }}#sponsors" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Sponsors') }}</a>
                    <a href="{{ route('get-involved') }}#donations" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Donations') }}</a>
                    <a href="{{ route('get-involved') }}#community" class="block text-sm text-gray-600 dark:text-white/60 ml-2">{{ __('Community') }}</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="block text-sm font-medium text-gray-700 dark:text-white/70">{{ __('Contact') }}</a>
            <div class="pt-2 border-t border-pride-gray dark:border-pride-black">
                <a href="{{ route('locale.switch', 'en') }}" class="block text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-pride-navy' : 'text-gray-700 dark:text-white/70' }}">{{ __('English') }}</a>
                <a href="{{ route('locale.switch', 'ro') }}" class="block text-sm font-medium {{ app()->getLocale() === 'ro' ? 'text-pride-navy' : 'text-gray-700 dark:text-white/70' }}">{{ __('Română') }}</a>
            </div>
        </div>
    </div>
</nav>
