<?php

namespace App\Http\Controllers\user;

use App\Artist;
use App\Cvote;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function vote()
    {

        $candidates = Cvote::all();
        $artists = Artist::orderBy('created_at', 'desc')->paginate(5);
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        return view('user.vote', [
         'candidates' => $candidates,
         'artists' => $artists,
         'songs' => $footer,
         'audios' => $footer,
         'galleries' => $galleries
        ]);
    }

    public function show($id)
    {
        $candidate = Cvote::find($id);
        $votes = Cvote::find($id)->increment('votes');
        $footer = Music::orderBy('created_at', 'desc')->paginate(3);
        $galleries = Gallery::all();
        $audios = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('user.voteshow', [
         'candidate' => $candidate,
         'audios' => $footer,
         'galleries' => $galleries,
         'musics' => $audios,
        ]);
    }

}
