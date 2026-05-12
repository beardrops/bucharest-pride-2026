@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ __('About') }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-pride-navy via-pride-pink to-pride-pink text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">{{ __('About') }}</h1>
        <p class="text-xl text-white/80">{{ __('Educate. Commemorate. Celebrate. Liberate.') }}</p>
    </div>
</section>

<section id="accept-organization" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
            <span class="w-3 h-3 rounded-full bg-blue-500"></span>
            <span class="w-3 h-3 rounded-full bg-purple-600"></span>
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Accept Organization') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Accept Organization is a non-profit organization based in Bucharest, Romania. We are the organizing body behind Bucharest Pride — the largest LGBTQ+ event in the country.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Our mission is to advocate for LGBTQ+ rights, promote equality, and create safe spaces for the community to celebrate and organize. We work year-round on advocacy campaigns, community programs, and cultural events.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Accept Organization is run by volunteers and supported by donations, sponsorships, and partnerships with like-minded organizations across Romania and Europe.') }}
        </p>
    </div>
</section>

<section id="bucharest-pride" class="py-20 bg-pride-gray dark:bg-pride-black">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
            <span class="w-3 h-3 rounded-full bg-blue-500"></span>
            <span class="w-3 h-3 rounded-full bg-purple-600"></span>
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('BucharestPride') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('About description') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('About description 2') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Bucharest Pride is a week-long festival featuring the Pride Parade, cultural events, concerts, human rights summits, and community gatherings. We bring together tens of thousands of participants every June.') }}
        </p>
    </div>
</section>

<section id="the-team" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
            <span class="w-3 h-3 rounded-full bg-blue-500"></span>
            <span class="w-3 h-3 rounded-full bg-purple-600"></span>
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('The Team') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Bucharest Pride is organized by a dedicated team of volunteers, activists, and community leaders. Our team works tirelessly throughout the year to make Pride happen. From event coordinators to logistics, communications to advocacy — every role is filled by passionate members of our community.') }}
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>