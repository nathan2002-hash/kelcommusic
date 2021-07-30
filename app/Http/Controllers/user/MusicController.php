<?php

namespace App\Http\Controllers\user;

use App\Comment;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function uploadForm()
    {
        $places = Music::all();

        return view('upload_photo', [
            'places' => $places
        ]);
    }

    public function index()
    {
        $songs = Music::orderBy('created_at', 'desc')->paginate(26);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.music', [
         'songs' => $songs,
         'audios' => $footer,
         'galleries' => $galleries
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $galleries = Gallery::all();
            $footer = Music::orderBy('created_at', 'desc')->paginate(3);
            $songs = Music::where('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('featuring', 'LIKE', '%'. $name . '%')
                           ->orWhere('music', 'LIKE', '%'. $name . '%')
                           ->orWhere('username', 'LIKE', '%'. $name . '%')->paginate(20);
        }
        return view('user.music', [
            'songs' => $songs,
            'audios' => $footer,
            'galleries' => $galleries
        ]);
    }

    public function show($id)
    {
        $song = Music::findOrFail($id);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('user.mdownload', [
         'music' => $song,
         'audios' => $footer,
         'galleries' => $galleries,
         'musics' => $audios,
        ]);
    }

    public function download($id)
    {
        return response()->download('uploads/music/mp3/' . $id);
    }
}
