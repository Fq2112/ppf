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

        if(file_exists($file_path)) {
            return view('pages.event.detail', [
                'video' => $request->title.'.mp4',
                'title' => ucwords(str_replace('-',' ',$request->title))
            ]);
        } else {
            return redirect()->route('home-company');
        }
    }
}
