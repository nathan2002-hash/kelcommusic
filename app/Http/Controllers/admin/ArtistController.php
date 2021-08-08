<?php

namespace App\Http\Controllers\admin;

use App\Artist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
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
         $artists = Artist::orderBy('created_at', 'desc')->paginate();
         return view('admin.artist.index', [
            'artists' => $artists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artist.create', [
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $artists = Artist::where('email', 'LIKE', '%'. $name . '%')
                           ->orWhere('username', 'LIKE', '%'. $name . '%')
                           ->orWhere('fname', 'LIKE', '%'. $name . '%')
                           ->orWhere('lname', 'LIKE', '%'. $name . '%')
                           ->orWhere('phone', 'LIKE', '%'. $name . '%')
                           ->orWhere('gender', 'LIKE', '%'. $name . '%')
                           ->orWhere('dob', 'LIKE', '%'. $name . '%')
                           ->orWhere('country', 'LIKE', '%'. $name . '%')
                           ->orWhere('state', 'LIKE', '%'. $name . '%')
                           ->orWhere('address', 'LIKE', '%'. $name . '%')
                           ->orWhere('city', 'LIKE', '%'. $name . '%')->paginate(50);
        }
        return view('admin.artist.index', [
            'artists' => $artists,
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
        $artist = new Artist();
        $artist->fname = $request->fname;
        $artist->lname = $request->lname;
        $artist->state = $request->state;
        $artist->country = $request->country;
        $artist->postcode = $request->postcode;
        $artist->phone = $request->phone;
        $artist->username = $request->username;
        $artist->email = $request->email;
        $artist->address = $request->address;
        $artist->city = $request->city;
        $artist->dob = $request->dob;
        $artist->gender = $request->gender;
        $artist->image = $request->image;
        $artist->save();
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
        $artist = Artist::findOrFail($id);
         return view('admin.artist.show', [
            'artist' => $artist
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
        $artist = Artist::findOrFail($id);
        return view('admin.artist.edit', [
           'artist' => $artist
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
        $artist = Artist::find($id);
        $artist->fname = $request->fname;
        $artist->lname = $request->lname;
        $artist->state = $request->state;
        $artist->country = $request->country;
        $artist->postcode = $request->postcode;
        $artist->phone = $request->phone;
        $artist->username = $request->username;
        $artist->email = $request->email;
        $artist->address = $request->address;
        $artist->city = $request->city;
        $artist->dob = $request->dob;
        $artist->gender = $request->gender;
        $artist->image = $request->image;
        $artist->save();
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
        Artist::find($id)->delete();
        return redirect()->back();
    }
}
