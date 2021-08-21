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
        $artists = Artist::orderBy('created_at', 'desc')->paginate(5);
        $songs = Music::orderBy('created_at', 'desc')->paginate(26);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.music', [
         'songs' => $songs,
         'artists' => $artists,
         'musics' => $musics,
         'audios' => $footer,
         'galleries' => $galleries
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $songs = Music::where('username', 'ILIKE', '%'. $search .'%')
                       ->orWhere('featuring', 'ILIKE', '%'. $search . '%')
                       ->orWhere('music', 'ILIKE', '%'. $search . '%')
                       ->orWhere('title', 'ILIKE', '%'. $search . '%')->paginate(20);
        $galleries = Gallery::all();
        $artists = Artist::orderBy('created_at', 'desc')->paginate(5);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('user.music', [
            'songs' => $songs
            'artists' => $artists,
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
    
    public function artist($id)
    {
        $artist = Artist::findOrFail($id);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $artists = Artist::orderBy('created_at', 'desc')->paginate(10);
        return view('user.artist', [
         'artist' => $artist,
         'audios' => $footer,
         'galleries' => $galleries,
         'musics' => $audios,
         'artists' => $artists,
        ]);
    }

    public function download($id)
    {
        return Storage::disk('spaces')->download('/music/' . $id);
    }
}
