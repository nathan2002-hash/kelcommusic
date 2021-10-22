<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Artist;
use App\Video;

class VideoController extends Controller
{
    //public function __construct()
    //{
        //$this->middleware('auth:admin');
    //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->paginate(60);
        return view('admin.video.index', [
            'videos' => $videos
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $videos = Video::where('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('featuring', 'LIKE', '%'. $name . '%')
                           ->orWhere('video', 'LIKE', '%'. $name . '%')
                           ->orWhere('username', 'LIKE', '%'. $name . '%')->paginate(40);
        }
        return view('admin.video.index', [
            'videos' => $videos,
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
        return view('admin.video.create', [
            'artists' => $artists
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
        $video = new Video();
        $video->title = $request->title;
        $video->year = $request->year;
        $video->month = $request->month;
        $video->day = $request->day;
        $video->artist_id = $request->artist_id;
        $video->username = $request->username;
        $video->featuring = $request->featuring;
        $video->video = $request->video;
        $video->image = $request->image;
        $video->save();
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
        $video = Video::findOrFail($id);
        return view('admin.video.show', [
            'video' => $video
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
        $video = Video::findOrFail($id);
        $artists = Artist::all();
        return view('admin.video.edit', [
            'video' => $video,
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
        $video = Video::find($id);
        $video->title = $request->title;
        $video->year = $request->year;
        $video->month = $request->month;
        $video->day = $request->day;
        $video->artist_id = $request->artist_id;
        $video->username = $request->username;
        $video->featuring = $request->featuring;
        $video->video = $request->video;
        $video->image = $request->image;
        $video->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::find($id)->delete();
        return redirect()->back();
    }
}
