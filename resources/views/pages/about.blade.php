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
    <title>{{ config('app.name', 'Bucharest Pride') }} — {{ __('About') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-pride-black">

@include('partials.navbar')

<section class="pt-32 pb-20 bg-gradient-to-br from-pride-navy via-pride-pink to-pride-pink text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">{{ __('Despre') }}</h1>
        <p class="text-xl text-white/80">{{ __('Educate. Commemorate. Celebrate. Liberate.') }}</p>
    </div>
</section>

<section id="accept-organization" class="py-20">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 items-center text-center">
		<div class="flex justify-left mb-8">
			<img src="/images/logo_accept_color.png" 
				 class="w-1/2 h-auto max-w-[300px]  brightness-0" 
				 alt="Accept Logo">
		</div>
		<h1 class="text-4xl font-bold text-pride-black text-left mb-8">
			{{ __('Suntem ACCEPT') }}
		</h1>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Construim o societate în care orientarea sexuală și identitatea de gen sunt considerate simple caracteristici ale ființei umane.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Suntem prima organizație neguvernamentală de drepturile omului din România care apără și promovează drepturile LGBTQIA+ (lesbiene, gay, bisexuali, persoane transgender, queer, intersex, asexuale) la nivel național.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Fondată în 1996, ACCEPT a contribuit la dezincriminarea homosexualităţii în România (2001) și la adoptarea legislației din domeniul nediscriminării. Suntem organizatorii Bucharest PRIDE, marșul pentru egalitate al comunității LGBTQIA+, care a reunit în 2025 peste 30.000 de persoane.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('În cele trei decenii de activitate, principalele noastre acțiuni s-au axat pe advocacy pentru recunoașterea și protecția legală a familiilor formate din persoane de același sex, obținerea unei proceduri demne de recunoaștere juridică a genului pentru persoanele transgender, asistenţă juridică pentru persoane LGBTQIA+ în cazuri de discriminare și infracțiuni motivate de ură, capacitarea şi dezvoltarea grupurilor de suport LGBTQIA+, activităţi culturale şi sociale ce promovează incluziunea.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Echipa noastră de avocați a reprezentat în fața instanțelor europene persoane LGBTQIA+ care au dus bătălii istorice: Buhuceanu și Alții, Coman și Alții, Mirin. Oferim consultanță juridică, psihologică și asistență în tranziție persoanelor LGBTQIA+ care ni se adresează.Promovăm egalitatea prin formarea poliţiştilor, medicilor, psihologilor şi profesorilor în domeniul nediscriminării. ') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Derulăm campanii naționale de awareness care ajung la milioane de oameni. Campania #ProtejațiToateFamiliile a pus pe TV primul spot din România care vorbește despre persoanele LGBTQIA+. Audiența lui a depășit în prima lună de campanie cifra de 12 milioane de români.') }}
        </p>
    </div>
</section>

<section id="bucharest-pride" class="py-20 bg-pride-pink dark:bg-pride-black text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 items-center text-center">
		<div class="flex justify-left mb-8">
			<img src="/images/logo_bucharest_pride.png" 
				 class="w-1/2 h-auto max-w-[300px] brightness-0 invert" 
				 alt="Accept Logo">
		</div>
		<h1 class="text-4xl font-bold text-left mb-8">
			{{ __('Organizăm Bucharest PRIDE') }}
		</h1>
        <p class="text-lg leading-relaxed mb-4">
            {{ __('Bucharest PRIDE este mai mult decât un marș sau un festival. Este un spațiu de comunitate, cultură și revendicare, construit de și pentru persoane LGBTI+ și pentru toți cei care cred într-o societate în care libertatea și demnitatea nu sunt negociabile.') }}
        </p>
        <p class="text-lg leading-relaxed mb-4">
            {{ __('De peste două decenii, Bucharest PRIDE aduce împreună mii de oameni prin evenimente culturale, dezbateri, artă, solidaritate și activism. Este un loc al întâlnirilor și al vizibilității, dar și un spațiu în care vorbim deschis despre realitățile pe care comunitatea le trăiește încă — discriminare, excludere, lipsa protecției juridice sau nevoia de a fi văzuți și respectați așa cum suntem. PRIDE înseamnă bucurie și celebrare, dar și memorie, curaj și responsabilitatea de a continua drumul deschis de generațiile care au luptat înaintea noastră.') }}
        </p>
        <p class="text-lg leading-relaxed mb-4">
            {{ __('Tema Bucharest PRIDE 2026 ') }} <b> -- ALL OF US -- </b> {{ __('vorbește despre apartenență și puterea de a merge împreună. Despre o comunitate diversă, în care fiecare voce contează și în care nimeni nu ar trebui lăsat în urmă. Într-un context social și politic tot mai polarizat, ALL OF US este o invitație la solidaritate, grijă și prezență.') }}
        </p>
        <p class="text-lg leading-relaxed mb-4">
            {{ __('Bucharest PRIDE este organizat de ACCEPT împreună cu parteneri, artiști, voluntari și o comunitate care îl construiește an de an. În spatele fiecărei ediții stau ani de activism, organizare și oameni care au refuzat să accepte invizibilitatea. Astăzi, Bucharest PRIDE continuă să fie unul dintre cele mai importante spații de vizibilitate și mobilizare pentru comunitatea LGBTI+ din România.') }}
        </p>
    </div>
</section>

<section id="the-team" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 items-center text-center">
		<h1 class="text-4xl font-bold text-pride-black text-left mb-8">
			{{ __('Echipa Bucharest PRIDE') }}
		</h1>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Bucharest PRIDE este rezultatul unui efort colectiv. Echipa ACCEPT coordonează acest proces alături de voluntarix, artiștx, organizații și parteneri care dau viață fiecărei ediții. ACCEPT își asumă dialogul cu autoritățile, coordonarea logistică și măsurile necesare pentru siguranța participantxlor, astfel încât PRIDE să rămână un spațiu accesibil, puternic și bine organizat.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Bucharest PRIDE crește și prin ideile comunității. În fiecare an, persoane și grupuri propun evenimente, intervenții artistice, conversații și formate noi care îmbogățesc programul. ACCEPT susține aceste inițiative prin coordonare, sprijin logistic și, acolo unde este posibil, resurse financiare, pentru ca mai multe voci și experiențe să își găsească locul în PRIDE.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-4">
            {{ __('Credem că cele mai importante spații comunitare se construiesc împreună — cu grijă, creativitate și oameni care aleg să fie parte din schimbare.') }}
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>