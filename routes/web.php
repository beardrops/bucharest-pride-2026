<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PublicEventController;
use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    $events = Event::where('is_published', true)
        ->where('start_date', '>=', now())
        ->orderBy('start_date', 'asc')
        ->take(6)
        ->get();
    return view('welcome', compact('events'));
})->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
        ->name('admin.login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
});

Route::get('/locale/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'ro'])) {
        abort(404);
    }
    session()->put('locale', $locale);
    app()->setLocale($locale);
    $events = Event::where('is_published', true)
        ->where('start_date', '>=', now())
        ->orderBy('start_date', 'asc')
        ->take(6)
        ->get();
    return view('welcome', compact('events'));
})->name('locale.switch');

// Existing routes follow below...

Route::get('/about', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.about');
})->name('about');

Route::get('/bucharest-pride-2026', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.pride-2026');
})->name('pride-2026');

Route::get('/mission', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.mission');
})->name('mission');

Route::get('/press-release', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.press-release');
})->name('press-release');

Route::get('/events', [PublicEventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [PublicEventController::class, 'show'])->name('events.show');

Route::get('/get-involved', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.get-involved');
})->name('get-involved');

Route::get('/contact', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('pages.contact');
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('admin/events', EventController::class)
        ->names('admin.events');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::get('/theme/{theme}', function (string $theme) {
    if (!in_array($theme, ['pride', 'corporate'])) {
        abort(404);
    }
    session()->put('theme', $theme);
    return redirect()->back();
})->name('theme.switch');
