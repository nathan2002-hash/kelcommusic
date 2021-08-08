<?php

namespace App\Http\Controllers\admin;

use App\Advance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvanceController extends Controller
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
        $advances = Advance::all();
         return view('admin.advance.index', [
            'advances' => $advances
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advance.create', [
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
        $advance = new Advance();
        $advance->info = $request->info;
        $advance->artist = $request->artist;
        $advance->facebook = $request->facebook;
        $advance->twitter = $request->twitter;
        $advance->title = $request->title;
        $advance->image = $request->image;
        $advance->save();
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
        $advance = Advance::findOrFail($id);
         return view('admin.advance.edit', [
            'advance' => $advance
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
        $advance = Advance::find($id);
        $advance->info = $request->info;
        $advance->artist = $request->artist;
        $advance->facebook = $request->facebook;
        $advance->twitter = $request->twitter;
        $advance->title = $request->title;
        $advance->image = $request->image;
        $advance->save();
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
        Advance::find($id)->delete();
        return redirect()->back();
    }
}
