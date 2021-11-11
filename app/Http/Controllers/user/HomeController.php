<?php

namespace App\Http\Controllers\user;

use App\Advance;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Studio;
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

    public function studio()
    {
        $studios = Studio::all();
        return view('user.studios', compact('studios', $studios));
    }

    public function studiocreate()
    {
        return view('admin.studio.create');
    }

    public function studiomusic($id)
    {
        $studio = Studio::findOrFail($id);
        //$musics = Music::orderBy('created_at', 'desc')->paginate(4);
        $studios = Studio::orderBy('created_at', 'desc')->paginate(4);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.studio', [
         'studio' => $studio,
         'studios' => $studios,
         'audios' => $footer,
         'galleries' => $galleries,
         'musics' => $studio->musics,
        ]);
    }

    public function studiostore(Request $request)
    {
        $studio = new Studio();
        $studio->name = $request->name;
        $studio->user = $request->user;
        $studio->site = $request->site;
        $studio->image = $request->image;
        $studio->phone = $request->phone;
        $studio->save();
        return redirect()->back();
    }
}
