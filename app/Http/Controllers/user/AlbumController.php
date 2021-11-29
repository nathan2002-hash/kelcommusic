<?php

namespace App\Http\Controllers\User;

use App\Album;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at', 'desc')->paginate(4);
        $galleries = Gallery::all();
        $albums = Album::all();
        return view('user.album.index', [
            'albums' => $albums,
            'songs' => $songs,
            'audios' => $footer,
            'videos' => $videos,
            'galleries' => $galleries,
        ]);
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at', 'desc')->paginate(4);
        $galleries = Gallery::all();
        $albums = Album::all();
        return view('user.album.album', [
            'albums' => $albums,
            'album' => $album,
            'audios' => $footer,
            'videos' => $videos,
            'galleries' => $galleries,
        ]);
    }
}
