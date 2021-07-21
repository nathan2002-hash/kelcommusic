<?php

namespace App\Http\Controllers\user;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        return view('user.contact', [
         'galleries' => $galleries,
         'audios' => $songs
        ]);
    }
}
