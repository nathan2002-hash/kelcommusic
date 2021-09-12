<?php

namespace App\Http\Controllers\user;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::orderBy('created_at', 'desc')->paginate(20);
        return view('user.videos', [
         'galleries' => $galleries,
         'audios' => $songs,
         'videos' => $videos
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $videos = Video::where('username', 'ILIKE', '%'. $search .'%')
                       ->orWhere('featuring', 'ILIKE', '%'. $search . '%')
                       ->orWhere('videos', 'ILIKE', '%'. $search . '%')
                       ->orWhere('title', 'ILIKE', '%'. $search . '%')->paginate(20);
        $galleries = Gallery::all();
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('user.videos', [
            'videos' => $videos,
            'audios' => $footer,
            'galleries' => $galleries
        ]);
    }


    public function show($id)
    {
        $galleries = Gallery::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $video = Video::findOrFail($id);
        $videos = Video::all();
        return view('user.video', [
         'galleries' => $galleries,
         'audios' => $songs,
         'video' => $video,
         'videos' => $videos
        ]);
    }

    public function download($id)
    {
        return Storage::disk('spaces')->download('/video/' . $id);
    }
}
