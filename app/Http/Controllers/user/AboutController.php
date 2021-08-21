<?php

namespace App\Http\Controllers\user;

use App\Advance;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $advances = Advance::all();
        return view('user.about', [
         'galleries' => $galleries,
         'audios' => $songs,
         'advances' => $advances
        ]);
    }
}
