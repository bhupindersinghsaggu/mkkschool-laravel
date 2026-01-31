<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'youtube_url' => 'required'
        ]);

        $youtubeId = $this->extractYoutubeId($request->youtube_url);

        Video::create([
            'title' => $request->title,
            'youtube_id' => $youtubeId
        ]);

        return back()->with('success', 'Video added successfully');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return back()->with('success', 'Video deleted');
    }

    private function extractYoutubeId($url)
    {
        preg_match(
            "%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^\"&?/ ]{11})%i",
            $url,
            $matches
        );

        return $matches[1] ?? null;
    }
}
