<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$galleries = Gallery::all();
        return view('admin.home', [
            //'galleries' => $galleries
           ]);
    }
}
