<?php

namespace App\Http\Controllers;

use App\Models\CbseMandate;

class PageController extends Controller
{
    public function showcbsemandate()
    {
        $data = cbsemandate::where('is_published', true)->firstOrFail();
        return view('website.cbsemandate', compact('data'));
    }
}
