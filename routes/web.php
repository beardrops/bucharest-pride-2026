<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PublicEventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) {
        app()->setLocale($locale);
    }
    return view('welcome');
})->name('home');

Route::get('/locale/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'ro'])) {
        abort(404);
    }
    session()->put('locale', $locale);
    app()->setLocale($locale);
    return view('welcome');
})->name('locale.switch');

Route::get('/about', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); }
    return view('pages.about');
})->name('about');

Route::get('/bucharest-pride-2026', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); }
    return view('pages.pride-2026');
})->name('pride-2026');

Route::get('/events', [PublicEventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [PublicEventController::class, 'show'])->name('events.show');

Route::get('/get-involved', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); }
    return view('pages.get-involved');
})->name('get-involved');

Route::get('/contact', function () {
    $locale = session('locale', config('app.locale'));
    if (in_array($locale, ['en', 'ro'])) { app()->setLocale($locale); }
    return view('pages.contact');
})->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('admin/events', EventController::class)
        ->names('admin.events');
});

require __DIR__.'/auth.php';