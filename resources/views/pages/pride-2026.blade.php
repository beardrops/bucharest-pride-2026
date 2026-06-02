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

<section id="march" class="py-20 bg-pride-pink dark:bg-pride-black text-white dark:text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold dark:text-pride-pink ml-2">{{ __('Marșul Bucharest PRIDE') }}</h2>
        </div>
        <p class="text-xl dark:text-pride-pink font-semibold mb-4">{{ __('ALL OF US înseamnă să mergem împreună. Pentru comunitatea noastră, pentru cei care au deschis drumul înaintea noastră și pentru cei care încă își revendică locul. Pe 13 iunie, ne vedem la marș.') }}</p>
		<h3 class="text-lg font-bold mb-4">{{ __('Parade Route') }}</h3>
		<div class="grid sm:grid-cols-2 gap-1 text-sm">
			<p>16:00:</p>
			<p>{{ __('Adunare la Piața Victoriei') }}</p>
			<p>17:00:</p>
			<p>{{ __('Pornire Bucharest PRIDE') }}</p>
			<p>19:00:</p>
			<p>{{ __('Sosire la Pride Park | Izvor') }}</p>
			<p>19:30:</p>
			<p>{{ __('Revendicări & Pride Party') }}</p>
		</div>

    </div>
</section>

<section id="guide" class="py-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-6">
            <h2 class="text-3xl font-bold text-pride-black dark:text-white ml-2">{{ __('Ghid de siguranță') }}</h2>
        </div>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Participanții la Marșul Bucharest PRIDE 2026 sunt rugați să ajungă pe Calea Victoriei, intersecție cu Strada Gheorghe Manu și trotuarele adiacente Căii Victoriei, în intervalul orar 16:00-17:00. Vă rugăm să nu întârziați, pentru că marșul va porni fix la ora 17:00.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Traseul marșului va fi: intersecție Piața Victoriei cu Calea Victoriei – Calea Victoriei – Pod Națiunile Unite – Bd. Națiunile Unite – traversare Bd. Libertății – alveola Parc Izvor – Parc Izvor. (orele 17:00 – 19:00). Traseul indicat anterior va fi parcurs pe carosabil, respectând toți participanții la marș și îndrumările organizatorilor și ale forțelor de ordine.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Atât în fața, cât și în spatele coloanei de participanți se va afla o platformă cu muzică. Organizatorii pot fi recunoscuți după badge-ul cu mențiunea “Organizatorx” și vor purta tricouri de culoare ____ cu însemnele Bucharest Pride, iar voluntarii pot fi recunoscuți după badge-ul cu mențiunea “Voluntarx” și vor purta tricouri de culoare _________.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('PRIDE-ul trebuie să fie un spațiu sigur și incluziv pentru toți participanții. În acest sens, nu sunt tolerate sub nicio formă mesaje rasiste, sexiste, xenofobe, islamofobe, antisemite, fatfobe, ableiste, homofobe, transfobe sau orice alt tip de discursuri instigatoare la ură.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Ne bucurăm împreună de diversitate. Marșul reunește o comunitate diversă și un număr semnificativ de susținători ai comunității LGBTQIA+. La Bucharest PRIDE respectăm libertatea de exprimare și opiniile tuturor participanților, încurajăm ca mesajele afișate să respecte toate identitățile persoanelor prezente, inclusiv intersecționalitatea acestor identități și toate minoritățile care ni se alătură.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('În cazul în care în apropierea voastră există un incident violent, vă rugăm să vă îndepărtați, să faceți un cerc la distanță în jurul incidentului, să scandați “FĂRĂ VIOLENȚĂ!”. Păstrați-vă calmul, nu fugiți și anunțați imediat organizatorii și forțele de ordine prezente. Vă rugăm să semnalați voluntarilor, organizatorilor sau forțelor de ordine orice comportament abuziv sau violent, atât din punct de vedere fizic, cât și verbal, precum și orice persoane prezente care ar putea să perturbe buna organizare a Marșului Bucharest PRIDE 2026 prin instigare la ură, violență și discriminare îndreptată împotriva participanților la adunarea publică. Vă rugăm ca pe toată durata marșului să urmați instrucțiunile organizatorilor și ale forțelor de ordine prezente.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('La marșul Bucharest PRIDE 2026 sunt interzise: armele de orice fel, materialele explozive sau incendiare, substanțele iritant-lacrimogene sau cu efect paralizant, dispozitivele pentru șocuri electrice ori alte obiecte ce pot fi folosite pentru acțiuni violente sau de tulburare a desfășurării normale a evenimentului, substanțele psihoactive sau psihotrope interzise prin lege sau băuturile alcoolice.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Dacă circulați cu transportul în comun (STB, Metrorex), vă rugăm să nu purtați însemne vizibile ale comunității LGBTQIA+ (steaguri rainbow, tricouri, bretele, etc.) pe traseul către punctul de start al marșului sau la plecarea de la marș. Vă rugăm ca, până la punctul de plecare al marșului, să circulați pe trotuar și să respectați regulile de circulație aflate în vigoare.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Fiți pregățiți pentru vremea din ziua marșului, în caz de ploaie sau soare puternic. Vă sfătuim să aveți umbrelă sau pelerină de ploaie, șapcă sau pălărie, cremă de protecție solară și apă. Dacă veniți însoțiți de copii, asigurați-vă că îi puteți proteja de soare sau ploaie, că aveți apă și mâncare la voi. Vă rugăm să contribuiți, alături de noi, la protejarea naturii și să nu aruncați pe jos sticle de apă goale, materiale promoționale, hârtii sau orice alte deșeuri.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Raportați la 112 și organizatorilor orice incident violent observat și indicați forțelor de ordine prezente pe traseul marșului unde s-a produs incidentul, care sunt persoanele care au nevoie de protecție și ajutor, cine sunt cei care au produs conflictul. Raportați la 112 și organizatorilor orice situație în care o persoană este rănită sau i se face rău de la aglomerație sau căldură. În spatele coloanei de participanți este o ambulanță pregătită să ofere primul ajutor. Un punct de prim ajutor este amplasat și la finalul traseului, în Parcul Izvor.') }}
        </p>
        <p class="text-lg text-gray-600 dark:text-white/60 leading-relaxed mb-6">
            {{ __('Finalul marșului va fi în Parcul Izvor, între orele 19:00-22:00. În cadrul Parcului Izvor, vă rugăm să urmați instrucțiunile organizatorilor și voluntarilor pentru a putea ajunge în cadrul evenimentului PRIDE Park.') }}
        </p>
    </div>
</section>

@include('partials.footer')
</body>
</html>