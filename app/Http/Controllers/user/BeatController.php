<?php

namespace App\Http\Controllers\User;

use App\Artist;
use App\Beat;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class BeatController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        $artists = Artist::orderBy('created_at', 'desc')->paginate(5);
        $beats = Beat::orderBy('created_at', 'desc')->paginate(26);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.beats', [
         'beats' => $beats,
         'artists' => $artists,
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
            $artists = Artist::orderBy('created_at', 'desc')->paginate(5);
            $footer = Music::orderBy('created_at', 'desc')->paginate(3);
            $songs = Beat::where('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('studio', 'LIKE', '%'. $name . '%')
                           ->orWhere('music', 'LIKE', '%'. $name . '%')->paginate(20);
        }
        return view('user.beats', [
            'songs' => $songs,
            'artists' => $artists,
            'audios' => $footer,
            'galleries' => $galleries
        ]);
    }


    public function show($id)
    {
        $beat = Beat::find($id);
        $view = Beat::find($id)->increment('views');
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        $beats = Beat::orderBy('created_at', 'desc')->paginate(3);
        return view('user.beat', [
         'beat' => $beat,
         'audios' => $footer,
         'galleries' => $galleries,
         'beats' => $beats,
        ]);
    }
}
