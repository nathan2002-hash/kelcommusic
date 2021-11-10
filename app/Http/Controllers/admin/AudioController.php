<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function audio(Request $request)
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
        if ($request-> hasfile('music')){
            $filenamewithext = $request->file('music')->getClientOriginalName();
            $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension = $request->file('music')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $music->music = $request->music->storeAs('/music', $filenametostore, 'spaces');
        }
        if ($request-> hasfile('image')){
            $filenamewithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $music->image = $request->image->storeAs('/mphoto', $filenametostore, 'spaces');
        }
         $music->views = $request->views;
         $music->producer = $request->producer;
        $music->save();
        return redirect()->back();
    }
}
