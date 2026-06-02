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
        <h1 class="text-5xl font-bold mb-4">{{ __('Comunicat lansare PRIDE 2026')}}</h1>
    </div>
</section>

<section class="pt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('COJO și Queer Flamenco, însoțiți de Pakita – vedeta  RuPaul’s Drag Race, pe scena Bucharest PRIDE 2026') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('A mai rămas o săptămână până la debutul ediției cu numărul 21 a Bucharest PRIDE – cel mai mare eveniment cultural și comunitar din România dedicat drepturilor persoanelor LGBTQIA+. Organizat de Asociația ACCEPT în perioada 3-13 iunie sub umbrela tematică ALL OF US, evenimentul va culmina și anul acesta cu Marșul Bucharest PRIDE, programat să aibă loc pe 13 iunie, începând cu ora 17:00, pe traseul devenit deja o tradiție: Calea Victoriei, Piața Națiunilor Unite, Palatul Parlamentului, Parcul Izvor.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Cei peste 30.000 de participanți care sunt așteptați anul acesta la ediția-manifest vor avea parte de un show memorabil la finalul Marșului. Pe scena Bucharest PRIDE, amplasată în Izvor, va concerta sâmbătă seară COJO, un susținător vocal al comunității LGBTQIA+. După concert, direct de pe scenele Barcelonei, artiștii de la Queer Flamenco, însoțiți de Pakita – vedeta RuPaul’s Drag Race Spania, vor aduce la București ritmul pasional de flamenco și farmecul extravagant al artei drag. Toate momentele artistice de pe scenă vor fi traduse în limba semnelor române – parte din proiectul ACCEPT de accesibilizare a Bucharest PRIDE.') }}
        </p>
    </div>
</section>

<section class="pt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('COJO live pe scena Bucharest PRIDE') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('"Suntem onorați că putem aduce pe scena Bucharest PRIDE nume cunoscute din industria muzicală românească, dar și artiști internaționali. COJO e deja vocea unei generații și îi suntem recunoscători pentru susținerea publică pe care o arată comunității LGBTQIA+. Prezența lui printre headlinerii de anul acesta reconfirmă amploarea evenimentului și spațiul pe care acesta în ocupă în peisajul celor mai importante festivaluri din România. E o victorie a comunității LGBTQIA+ și a aliaților care îl fac să crească de la un an la altul.", declară Mădălina Stoica, directoarea artistică Bucharest PRIDE.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('COJO va veni pe scena din PRIDE PARK cu piese de pe albumul conceptual „ERUPT”, creat în colaborare cu producătorul muzical și directorul creativ iRonic Distors, în coproducție cu Universal Music România. Cu o viziune artistică autentică și îndrăzneață care îmbină muzica, poezia, teatrul și povestirea vizuală, COJO și-a câștigat rapid popularitatea prin limbajul său direct și emoționant, devenind o voce distinctă a noii generații, cu un mesaj social puternic despre identitate, sănătate mintală și traume colective.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Queer Flamenco – invitați speciali din Barcelona, alături de Pakita – vedeta RuPaul’s Drag Race Spania') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('"Pentru cea mai mare parte a publicului din România, RuPaul’s Drag Race a reprezentat prima întâlnire cu lumea strălucitoare a drag-ului. Când un artist internațional de talia Pakitei – un nume iconic dintre cele promovate de faimosul show de televiziune, vine la București alături de Queer Flamenco, știi că România reprezintă un spațiu cultural relevant, cu o comunitate queer vie și prezentă, care nu mai poate sta la coada clasamentului european când vine vorba de drepturile persoanelor LGBTQIA+. E și o formă splendidă de solidarizare a artiștilor spanioli, veniți din țara aflată la capătul opus, în fruntea clasamentului, fiind cea mai prietenoasă cu comunitatea, conform celui mai recent raport Ilga Europe.", subliniază Ilinca Prisăcariu, coordonatoarea Bucharest PRIDE.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Spectacolul oferit de Queer Flamenco și Pakita la Bucharest PRIDE 2026 vorbește de la sine despre tema centrală a acestei ediții: intersecționalitatea. O experiență care onorează deopotrivă cultura flamenco și estetica drag, proiectul catalan al celor de la Queer Flamenco s-a născut la inițiativa dansatorului catalan Rubén Heras, inspirat de confluența minorităților din cartierele populare ale Barcelonei. Proiectul este astăzi cel mai apreciat concept de spectacol flamenco din Spania și a făcut turul europei promovând diversitatea și incluziunea.') }}
        </p>
    </div>
</section>

<section class="pt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Un Bucharest PRIDE mai accesibil în colaborare cu Neurodivers') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('În 12 și 13 iunie, momentele de pe scena PRIDE Park vor fi interpretate în limba semnelor române de Lavinia Chițu și Samira Nițu.  În plus, ediția cu numărul 21 marchează și începutul colaborării dintre Bucharest PRIDE și Neurodivers, care-și propune să transforme evenimentul într-un loc mai sigur și mai accesibil pentru persoanele din comunitate și aliații cu nevoi diverse.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('"All of us înseamnă noi toți și fiecare dintre noi. E promisiunea unui eveniment la care fiecare poate sa participe, unde toți oamenii simt că aparțin. Un PRIDE mai accesibil e un PRIDE mai ancorat în realitate. E parte din misiunea ACCEPT de a nu face pe nimeni să se simtă lăsat pe dinafară. Comunitatea nu există cu adevărat atâta timp cât nu include pe toată lumea.’’, subliniază Victor Ciobotaru, directorul executiv ACCEPT.,,All of us înseamnă noi toți și fiecare dintre noi. E promisiunea unui eveniment la care fiecare poate sa participe, unde toți oamenii simt că aparțin. Un PRIDE mai accesibil e un PRIDE mai ancorat în realitate. E parte din misiunea ACCEPT de a nu face pe nimeni să se simtă lăsat pe dinafară. Comunitatea nu există cu adevărat atâta timp cât nu include pe toată lumea.", subliniază Victor Ciobotaru, directorul executiv ACCEPT.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Neurodivers va coordona un bloc dedicat persoanelor cu dizabilități în cadrul Marșului din 13 iunie, va susține un eveniment despre dizabilitate și intersecționalitate la PRIDE Hub (Rezidența Scena 9) și va accesibiliza materialele de comunicare prin elemente precum coduri QR pentru text to speech. În PRIDE Park (12-13 iunie, Parcul Izvor) va exista un spațiu dedicat în fața scenei și o zonă umbrită în parc, rezervată persoanelor cu dizabilități, un cort low stimulation, pentru persoanele care au nevoie de o pauză de la zgomot și agitație, precum și un stand dedicat al partenerilor de la Neurodivers, cu stickere create de artiști cu dizabilități și flyere informative despre dizabilități și intersecționalitate.') }}
        </p>
    </div>
</section>

<section class="pt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('DESPRE ACCEPT') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Înființată în 1996, Asociația ACCEPT este prima și cea mai longevivă organizație LGBTQIA+ din România. De-a lungul a 30 de ani, ACCEPT a luptat pentru decriminalizarea homosexualității, a documentat discriminarea și violența, a construit servicii de sprijin pentru comunitate și a adus an de an Bucharest Pride în stradă ca act de rezistență și celebrare.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Sponsori: NIVEA') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Spații partenere: Rezidența9, Heavy Yard, Teatrelli, Cool Cat, InFLUX, Forge, Centrul Național al Dansului București, Control Club, OTOTO, Cinema Elvire Popesco, Manasia Hub, Apollo 111 Cinema') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Parteneri de accesibilitate: Neurodivers') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Plăcut de: Radio Guerrilla') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Parteneri media: Elle, Zile și Nopți, IQads, Scena9, Munteanu Recomandă') }}
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>