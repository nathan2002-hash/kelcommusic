<?php

namespace App\Http\Controllers\admin;

use App\Artist;
use App\Comment;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Music::orderBy('created_at', 'desc')->paginate(50);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::all();
        $galleries = Gallery::all();
        return view('admin.music.index', [
            'songs' => $songs,
            'audios' => $audios,
            'videos' => $videos,
            'galleries' => $galleries
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $songs = Music::where('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('featuring', 'LIKE', '%'. $name . '%')
                           ->orWhere('music', 'LIKE', '%'. $name . '%')
                           ->orWhere('username', 'LIKE', '%'. $name . '%')->paginate(50);
        }
        return view('admin.music.index', [
            'songs' => $songs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $videos = Video::all();
        return view('admin.music.create', [
            'artists' => $artists,
            'videos' => $videos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $music = new Music();
        $music->username = $request->username;
        $music->video_id = $request->video_id;
        $music->title = $request->title;
        $music->featuring = $request->featuring;
        $music->message = $request->message;
        $music->artist_id = $request->artist_id;
        $music->day = $request->day;
        $music->month = $request->month;
        $music->year = $request->year;
        $music->music = $request->music;
        $music->image = $request->image;
         $music->views = $request->views;
        $music->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Music::findOrFail($id);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $comments = Comment::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::all();
        $galleries = Gallery::all();
        return view('admin.music.show', [
            'music' => $song,
            'audios' => $audios,
            'comments' => $comments,
            'videos' => $videos,
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Music::findOrFail($id);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::all();
        $galleries = Gallery::all();
        $artists = Artist::all();
        return view('admin.music.edit', [
            'music' => $song,
            'audios' => $audios,
            'videos' => $videos,
            'galleries' => $galleries,
            'artists' => $artists
           ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $music = Music::find($id);
        $music->username = $request->username;
        $music->video_id = $request->video_id;
        $music->title = $request->title;
        $music->featuring = $request->featuring;
        $music->message = $request->message;
        $music->artist_id = $request->artist_id;
        $music->day = $request->day;
        $music->month = $request->month;
        $music->year = $request->year;
        $music->music = $request->music;
        $music->image = $request->image;
         $music->views = $request->views;
        $music->save();
        return redirect()->back();
    }

    public function download($id)
    {
        return response()->download('uploads/music/mp3/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Music::find($id)->delete();
        return redirect()->back();
    }
}
