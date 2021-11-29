<?php

namespace App\Http\Controllers\admin;

use App\Album;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Track;
use App\Artist;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $songs = Music::orderBy('created_at', 'desc')->paginate(50);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $albums = Album::all();
        $galleries = Gallery::all();
         $artists = Artist::all();
        return view('admin.track.create', [
            'songs' => $songs,
            'audios' => $audios,
            'albums' => $albums,
            'artists' => $artists,
            'galleries' => $galleries
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
        $music = new Track();
        $music->username = $request->username;
        $music->album_id = $request->album_id;
        $music->title = $request->title;
        $music->featuring = $request->featuring;
        $music->message = $request->message;
        $music->artist_id = $request->artist_id;
        $music->day = $request->day;
        $music->month = $request->month;
        $music->year = $request->year;
        $music->producer = $request->producer;
        if ($request-> hasfile('music')){
            $filenamewithext = $request->file('music')->getClientOriginalName();
            $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension = $request->file('music')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $music->music = $request->music->storeAs('/track', $filenametostore, 'spaces');
        }
        if ($request-> hasfile('image')){
            $filenamewithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $music->image = $request->image->storeAs('/tphoto', $filenametostore, 'spaces');
        }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
