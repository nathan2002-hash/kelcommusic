<?php

namespace App\Http\Controllers\user;

use App\Advance;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at', 'desc')->paginate(4);
        $galleries = Gallery::all();
        $advances = Advance::all();
        return view('user.home', [
         'songs' => $songs,
         'audios' => $footer,
         'videos' => $videos,
         'galleries' => $galleries,
         'advances' => $advances
        ]);
    }
}
