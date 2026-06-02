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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-pride-pink via-pride-navy to-pride-navy text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">{{ __('Declarație comună cu ocazia Bucharest Pride 2026')}}</h1>
    </div>
</section>

<section class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Declarația misiunilor diplomatice') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Cu ocazia Bucharest Pride 2026, noi, misiunile diplomatice și organizațiile internaționale semnatare din București, ne reafirmăm sprijinul ferm și neclintit pentru comunitatea LGBTIQ+ din România.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Bucharest Pride din acest an are loc sub tema „ALL OF US”, un mesaj puternic care ne amintește că egalitatea, demnitatea și drepturile omului aparțin tuturor. Este un apel la unitate, solidaritate și incluziune într-un moment în care diviziunile, prejudecățile și excluderea continuă să afecteze numeroase comunități din Europa și din lume.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Bucharest Pride 2026 coincide, de asemenea, cu aniversarea a 30 de ani de activitate a ACCEPT, prima și cea mai longevivă organizație LGBTIQ+ din România. Recunoaștem trei decenii de activism, advocacy, consolidare comunitară și curaj, care au contribuit în mod semnificativ la promovarea egalității și a drepturilor omului în România. În calitate de parteneri și aliați, ne exprimăm solidaritatea cu toate persoanele care lucrează pentru construirea unei societăți în care fiecare să poată trăi deschis, în siguranță și cu demnitate. Recunoaștem diversitatea existentă în cadrul comunității LGBTIQ+ și afirmăm că incluziunea trebuie să îi cuprindă pe toți oamenii, indiferent de orientare sexuală, identitate de gen, expresie de gen, caracteristici sexuale, dizabilitate, etnie, religie, vârstă sau orice alt statut.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Ne exprimăm, de asemenea, aprecierea și susținerea pentru evenimentele Pride organizate în întreaga țară — la Brașov, Cluj, Iași, Oradea și Timișoara. Aceste Pride-uri regionale joacă un rol esențial în consolidarea comunităților locale, promovarea vizibilității și asigurarea faptului că promisiunea egalității ajunge în fiecare colț al României. Prezența lor tot mai puternică demonstrează că aspirația către demnitate, libertate și apartenență este împărtășită de oameni din întreaga țară.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Reamintim că drepturile persoanelor LGBTIQ+ sunt protejate ferm de legislația Uniunii Europene și de tratatele internaționale privind drepturile omului. Curtea Europeană a Drepturilor Omului și Curtea de Justiție a Uniunii Europene au reafirmat în mod repetat aceste drepturi, inclusiv protecția împotriva discriminării, recunoașterea juridică a familiilor și proceduri accesibile de recunoaștere legală a genului. Aceste hotărâri sunt obligatorii și trebuie implementate pe deplin, atât în România, cât și în întreaga Europă.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Felicităm organizatorii, voluntarii, membrii comunității și aliații care continuă să transforme Bucharest Pride într-o celebrare vibrantă a diversității și într-o platformă pentru dialog, vizibilitate și participare democratică. Prin eforturile lor, Pride a devenit nu doar o celebrare, ci și o expresie a implicării civice și a speranței pentru un viitor mai incluziv.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Recunoaștem, totodată, provocările care persistă. Dezinformarea, discursul instigator la ură, discriminarea și ascensiunea extremismului continuă să amenințe siguranța și demnitatea persoanelor LGBTIQ+, nu doar în România, ci în întreaga lume. Răspunsul la aceste provocări necesită leadership, solidaritate și un angajament ferm față de valorile democratice și drepturile omului.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Tema „ALL OF US” ne amintește că lupta pentru egalitate nu este niciodată responsabilitatea unei singure comunități. Este un efort comun, care aduce beneficii întregii societăți. Democrațiile sunt mai puternice atunci când fiecare persoană poate participa pe deplin și liber la viața publică, fără teama discriminării sau a excluderii.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Rămânem dedicați susținerii comunității LGBTIQ+ și tuturor celor din România care luptă pentru o societate întemeiată pe egalitate, justiție, diversitate și drepturile omului pentru toți.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Suntem mândri să mergem alături de voi pe acest drum.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Semnatari (se finalizeaza curand, nu am acum).') }}
        </p>
    </div>
</section>
@include('partials.footer')
</body>
</html>