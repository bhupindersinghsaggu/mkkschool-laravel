<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::latest()
                        ->take(6)
                        ->get();

        $events = Event::latest()
                        ->take(3)
                        ->get();

        return view('website.home', compact('videos', 'events'));
    }
}