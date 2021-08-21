<?php

namespace App\Http\Controllers\user;

use App\Bio;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Music;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $songs = Music::orderBy('created_at', 'desc')->paginate(3);
        $bios = Bio::orderBy('created_at', 'desc')->paginate(10);
        return view('user.blog', [
         'galleries' => $galleries,
         'audios' => $songs,
         'bios' => $bios
        ]);
    }
}
