@php $locale = session('locale', config('app.locale')); if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); } @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') === 'corporate' ? 'theme-corporate' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ __('Get Involved') }}</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-pride-navy via-pride-pink to-pride-pink text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">{{ __('Get Involved') }}</h1>
        <p class="text-xl text-white/80">{{ __('Support subtitle') }}</p>
    </div>
</section>

<section id="volunteer" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Volunteer') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Volunteer desc') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('We are always looking for passionate volunteers to help with event organization, parade marshaling, stage management, communications, and more. No experience necessary — just bring your enthusiasm!') }}
        </p>
    </div>
</section>

<section id="sponsors" class="py-20 bg-pride-gray dark:bg-pride-black">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Sponsors') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Sponsor desc') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('We offer a range of sponsorship packages for businesses of all sizes. From event visibility to community engagement programs, your support makes Pride possible.') }}
        </p>
    </div>
</section>

<section id="donations" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Donations') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Donate desc') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('As a non-profit organization, every donation helps us keep Pride accessible and free for everyone. Your contribution supports our year-round community programs, advocacy work, and the annual festival.') }}
        </p>
    </div>
</section>

<section id="community" class="py-20 bg-pride-gray dark:bg-pride-black">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Community') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Bucharest Pride is more than a festival — it is a community. Throughout the year, we organize meetups, workshops, support groups, and cultural events. We believe in building a strong, resilient, and visible LGBTQ+ community in Romania. Join us.') }}
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>