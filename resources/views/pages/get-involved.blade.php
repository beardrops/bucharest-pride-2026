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
            {{ __('Voluntari Bucharest PRIDE') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Bucharest PRIDE este pus în mișcare de o echipă dedicată de voluntarix care contribuie cu energie, grijă și timp pentru comunitate. Pentru ediția 2026, înscrierile pentru echipa de voluntari s-au încheiat, iar locurile disponibile au fost ocupate.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Chiar și așa, există multe feluri prin care poți fi aproape de PRIDE — participând la evenimente, susținând comunitatea, distribuind mesajele noastre și contribuind la energia care face acest spațiu posibil. Ne bucurăm să te avem alături și sperăm să ne revedem în viitoarele ediții ale echipei de voluntarix.') }}
        </p>
    </div>
</section>

<section id="sponsors" class="py-20 bg-pride-gray dark:bg-pride-black">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Donează pentru Bucharest PRIDE') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Bucharest PRIDE este construit prin solidaritate și susținut de oameni care cred că vizibilitatea, cultura și drepturile merită apărate și celebrate. Donațiile ne ajută să organizăm evenimente accesibile și sigure, să susținem programul artistic și comunitar și să păstrăm PRIDE deschis cât mai multor oameni.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Poți susține Bucharest PRIDE prin transfer bancar în conturile ACCEPT, deschise la ING Bank (SWIFT: INGBROBU):') }}
        </p>
		<p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            <b>RON:</b> RO19INGB0001000129678915
        </p>
		<p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            <b>USD:</b> RO65INGB0001000129674013
        </p>
		<p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            <b>EUR:</b> RO11INGB0001000129670717
        </p>	
		<p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Dacă dorești să susții Bucharest PRIDE prin sponsorizare ca persoană juridică, scrie-ne direct la') }} <a href="mailto:victor@acceptromania.ro"  class="text-pride-pink">victor@acceptromania.ro</a>
        </p>
    </div>
</section>

<section id="donations" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Spații partenere & evenimente comunitare') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Bucharest PRIDE crește prin colaborări și prin spațiile care aleg să fie parte din comunitate. În fiecare an, locații, organizații și grupuri independente contribuie la program prin evenimente, inițiative culturale și întâlniri care dau viață PRIDE Week.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed">
            {{ __('Pentru ediția 2026, apelul pentru evenimente comunitare s-a încheiat, iar programul este deja în construcție. Dacă dorești să fii alături de Bucharest PRIDE în 2027 — fie ca spațiu partener, inițiator de evenimente sau colaborator — scrie-ne la') }} <a href="mailto:bucharestpride@acceptromania.ro"  class="text-pride-pink">bucharestpride@acceptromania.ro</a>
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>