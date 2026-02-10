<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Admin list
    public function index()
    {
        $events = Event::latest()   // newest first (created_at)
            ->take(3)   // 👈 ONLY 3 EVENTS
            ->get();

        $events = Event::latest()->paginate(10);
        return view('dashboard.events.index', compact('events'));
    }


    public function publicIndex(Request $request)
    {
        $query = Event::query();

        // 📅 Filter by year
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        // 🏷 Filter by type (column already exists)
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $events = $query->latest()
            ->paginate(9)
            ->withQueryString();

        // Years dropdown
        $years = Event::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year');

        // Types dropdown
        $types = Event::select('type')
            ->distinct()
            ->whereNotNull('type')
            ->pluck('type');

        return view('website.events', compact('events', 'years', 'types'));
    }
    // Store event
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'type' => 'required|in:event,achievement',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'button_link' => 'nullable|url',
        ]);

        $path = $request->file('image')->store('events', 'public');

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'type' => $request->type,
            'image' => $path,
            'button_link' => $request->button_link,
        ]);

        return back()->with('success', 'Event added successfully.');
    }

    // Show edit form
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', compact('event'));
    }

    // ✅ UPDATE EVENT (ONLY ONE METHOD)
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'type' => 'required|in:event,achievement',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'button_link' => 'nullable|url',
        ]);

        $data = $request->only([
            'title',
            'description',
            'event_date',
            'type',
            'button_link',
        ]);

        // Replace image if uploaded
        if ($request->hasFile('image')) {

            if ($event->image && Storage::disk('public')->exists($event->image)) {
                Storage::disk('public')->delete($event->image);
            }

            $data['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($data);

        return redirect()
            ->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    // Delete event
    public function destroy(Event $event)
    {
        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return back()->with('success', 'Event deleted successfully.');
    }

    // Public event details
    public function show(Event $event)
    {
        return view('website.event-show', compact('event'));
    }
}
