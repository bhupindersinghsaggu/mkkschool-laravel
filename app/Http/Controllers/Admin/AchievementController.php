<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::latest()->get();
        return view('dashboard.achievements.index', compact('achievements'));
        $achievements = Achievement::latest()->paginate(10);
        return view('dashboard.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('dashboard.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'button_link' => 'nullable|url',
            'achievement_date' => 'nullable|date',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('achievements', 'public');
        }

        Achievement::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'button_link' => $request->button_link,
            'achievement_date' => $request->achievement_date,
        ]);

        return redirect()
            ->route('achievements.index')
            ->with('success', 'Achievement added successfully');
    }

    public function destroy(Achievement $achievement)
    {
        if ($achievement->image && Storage::disk('public')->exists($achievement->image)) {
            Storage::disk('public')->delete($achievement->image);
        }

        $achievement->delete();

        return back()->with('success', 'Achievement deleted');
    }
}
