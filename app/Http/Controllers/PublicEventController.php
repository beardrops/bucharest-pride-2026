<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PublicEventController extends Controller
{
    public function index()
    {
        $locale = session('locale', config('app.locale'));
        if (in_array($locale, ['en', 'ro'])) {
            app()->setLocale($locale);
        }

        $events = Event::where('is_published', true)->latest()->paginate(12);

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        abort_if(! $event->is_published, 404);

        $locale = session('locale', config('app.locale'));
        if (in_array($locale, ['en', 'ro'])) {
            app()->setLocale($locale);
        }

        return view('events.show', compact('event'));
    }
}
