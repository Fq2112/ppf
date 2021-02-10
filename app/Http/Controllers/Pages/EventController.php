<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EventController extends Controller
{
    public function showEvent(Request $request)
    {
        $file_path = storage_path('app/public/event/' . $request->title.'.mp4');
        $video = file_exists($file_path) ? $request->title.'.mp4' : null;

        return view('pages.event.detail', [
            'video' => $video,
            'title' => ucwords(str_replace('-',' ',$request->title))
        ]);
    }
}
