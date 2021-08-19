<?php

namespace App\Http\Controllers\user;

use App\Comment;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(26);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.music', [
         'songs' => $songs,
         'musics' => $musics,
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
            $songs = Music::where('username', 'LIKE', '%'. $name . '%')
                           ->where('featuring', 'LIKE', '%'. $name . '%')
                           ->where('music', 'LIKE', '%'. $name . '%')
                           ->where('title', 'LIKE', '%'. $name . '%')->paginate(20);
        }
        return view('user.music', [
            'songs' => $songs,
            'audios' => $footer,
            'galleries' => $galleries
        ]);
    }

    public function wow(Request $request)
    {
        $search = $request->get('search');
        $songs = Music::where('music', 'like', '%'. $search.'%')->get();
        $galleries = Gallery::all();
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
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
        return Storage::disk('spaces')->download('/' . $id);
    }
}
