<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Content;

use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $images = Image::all();

        // // return view('images.index', compact('images'));
        // return view('contents.index', compact('images'));
       
        // we get info from both content and image DB's
        $contents = Content::all();
        $images = Image::all();
        return view('contents.index', compact('contents', 'images'));

        // $images = DB::table('images')->get();
        // $contents = DB::table('contents')->get();
        // return view('contents.index', ['images','contents']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_name'=>'required',
        ]);

        $image = new Image([
            'image_name' => $request->get('image_name'),
        ]);
        $image->save();
        // return redirect('/images')->with('success', 'Image saved!');
        return redirect('/contents')->with('success', 'Image saved!');

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
        $image = Image::find($id);
        return view('images.edit', compact('image'));   
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
        $request->validate([
            'image_name'=>'required',
        ]);

        $image = Image::find($id);
        $image->image_name =  $request->get('image_name');
        $image->save();

        return redirect('/images')->with('success', 'Image updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();

        return redirect('/images')->with('success', 'Image deleted!');
    }
}
