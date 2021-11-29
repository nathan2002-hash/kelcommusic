<?php

namespace App\Http\Controllers\user;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Track;
use App\Video;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function show($id)
    {
        $music = Track::findOrFail($id);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at', 'desc')->paginate(4);
        $galleries = Gallery::all();
        return view('user.album.show', [
            'music' => $music,
            'audios' => $footer,
            'videos' => $videos,
            'galleries' => $galleries,
        ]);
    }
}
