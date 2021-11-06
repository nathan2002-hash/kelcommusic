<?php

namespace App\Http\Controllers\admin;

use App\Artist;
use App\Beat;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use App\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $beats = Beat::orderBy('created_at', 'desc')->paginate(50);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $videos = Video::all();
        $galleries = Gallery::all();
        return view('admin.beat.index', [
            'beats' => $beats,
            'audios' => $audios,
            'videos' => $videos,
            'galleries' => $galleries
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $beats = Beat::where('studio', 'ILIKE', '%'. $search .'%')
                       ->orWhere('music', 'ILIKE', '%'. $search . '%')
                       ->orWhere('title', 'ILIKE', '%'. $search . '%')->paginate(20);
        $galleries = Gallery::all();
        $artists = Artist::orderBy('created_at', 'desc')->paginate(8);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.beat.index', [
            'beats' => $beats,
            'artists' => $artists,
            'audios' => $footer,
            'galleries' => $galleries
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
        return view('admin.beat.create', [
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
        $beat = new Beat();
        $beat->studio = $request->studio;
        $beat->title = $request->title;
        $beat->day = $request->day;
        $beat->month = $request->month;
        $beat->year = $request->year;
        //$beat->music = $request->music;
        if ($request->hasFile('music')) {
        $file = $request->file('music');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $beat->music = $request->music->store('beats/', 'do_spaces', $filename);
        //$music->music = $filename;
        }
        $beat->image = $request->image;
        $beat->views = $request->views;
        $beat->save();
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
        $beat = Beat::findOrFail($id);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('admin.beat.show', [
            'beat' => $beat,
            'audios' => $audios,
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
        $beat = Beat::findOrFail($id);
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('admin.beat.edit', [
            'beat' => $beat,
            'audios' => $audios,
            'galleries' => $galleries,
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
        $beat = Beat::find($id);
        $beat->studio = $request->studio;
        $beat->title = $request->title;
        $beat->day = $request->day;
        $beat->month = $request->month;
        $beat->year = $request->year;
        $beat->music = $request->music;
        $beat->image = $request->image;
        $beat->views = $request->views;
        $beat->save();
        return redirect()->back();
    }

    public function download($id)
    {
       return Storage::disk('spaces')->download('/beats/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Beat::find($id)->delete();
        return redirect()->back();
    }
}
