<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PublicEventController extends Controller
{
    public function index()
    {
        $events = Event::where('is_published', true)->latest()->paginate(12);

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        abort_if(! $event->is_published, 404);

        return view('events.show', compact('event'));
    }
}
