@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
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
    <title>{{ config('app.name', 'Bucharest Pride') }} — Bucharest Pride 2026</title>
    <link rel="stylesheet" href="/build/assets/app-Dt9BxW6U.css">
    <script type="module" src="/build/assets/app-DZ_emaEe.js"></script>
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-pride-pink via-pride-navy to-pride-navy text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">Bucharest Pride 2026</h1>
        <p class="text-xl text-white/80">{{ __('June 27 – July 5, 2026') }}</p>
    </div>
</section>

<section id="manifest" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Manifest') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Bucharest Pride is a political act. We march not just to celebrate, but to demand our rights. In Romania, LGBTQ+ people still face discrimination, lack of legal recognition for same-sex families, and daily challenges to their dignity.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('We demand marriage equality. We demand protection from discrimination. We demand the right to live openly and authentically without fear. We stand in solidarity with trans and non-binary people, whose rights are under attack across Europe.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Equality is not debated. It is guaranteed.') }}
        </p>
    </div>
</section>

<section id="march" class="py-20 bg-pride-gray dark:bg-pride-black">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('March') }}</h2>
        </div>
        <p class="text-xl text-pride-pink dark:text-pride-pink font-semibold mb-4">{{ __('Saturday, July 5, 2026') }}</p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Parade description') }}
        </p>
        <div class="bg-white dark:bg-pride-black rounded-2xl p-8 shadow-sm">
            <h3 class="text-lg font-bold text-pride-black dark:text-white mb-4">{{ __('Parade Route') }}</h3>
            <div class="grid sm:grid-cols-2 gap-4 text-sm">
                <div>
                    <p class="font-semibold text-pride-black dark:text-white">{{ __('Start') }}: Piața Universității</p>
                    <p class="text-gray-500">10:00 AM</p>
                </div>
                <div>
                    <p class="font-semibold text-pride-black dark:text-white">{{ __('End') }}: Piața Victoriei</p>
                    <p class="text-gray-500">~14:00</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
</body>
</html>