<?php

namespace App\Http\Controllers\admin;

use App\Bio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiographyController extends Controller
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
         $bios = Bio::orderby('created_at', 'desc')->paginate(20);
         return view('admin.bio.index', [
            'bios' => $bios
        ]);
    }

    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name = $request->get('name');
            $bios = Bio::where('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('title', 'LIKE', '%'. $name . '%')
                           ->orWhere('info', 'LIKE', '%'. $name . '%')
                           ->orWhere('artist', 'LIKE', '%'. $name . '%')->paginate(10);
        }
        return view('admin.bio.index', [
            'bios' => $bios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$galleries = Gallery::all();
        return view('admin.bio.create', [
            //'galleries' => $galleries
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
        $bio = new Bio();
        $bio->artist = $request->artist;
        $bio->title = $request->title;
        $bio->info = $request->info;
        $bio->day = $request->day;
        $bio->month = $request->month;
        $bio->year = $request->year;
        $bio->image = $request->image;
        $bio->save();
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
        $bio = Bio::findOrFail($id);
        return view('admin.bio.edit', [
            'bio' => $bio
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
        $bio = Bio::find($id);
        $bio->artist = $request->artist;
        $bio->title = $request->title;
        $bio->info = $request->info;
        $bio->day = $request->day;
        $bio->month = $request->month;
        $bio->year = $request->year;
        $bio->image = $request->image;
        $bio->save();
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
        Bio::find($id)->delete();
        return redirect()->back();
    }
}
