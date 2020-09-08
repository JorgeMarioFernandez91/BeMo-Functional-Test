<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();

        // OG code
        return view('contents.index', compact('contents'));

        // get sent to admin.blade.php after we create new content
        // return view('admin', compact('contents'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('contents.create');

        return view('contents.create');
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
            'text'=>'required',
            'bold'=>'boolean',
            'italics'=>'boolean',
            'strikethrough'=>'boolean',
            'createlinks'=>'boolean',
            'centertext'=>'boolean',
            'h1'=>'boolean',
            'h2'=>'boolean',
            'h3'=>'boolean',
        ]);

        $content = new Content([
            'text' => $request->get('text'),
            'bold' => $request->get('bold'),
            'italics' => $request->get('italics'),
            'strikethrough' => $request->get('strikethrough'),
            'createlinks' => $request->get('createlinks'),
            'centertext' => $request->get('centertext'),
            'h1' => $request->get('h1'),
            'h2' => $request->get('h2'),
            'h3' => $request->get('h3'),
        ]);
        $content->save();
        return redirect('/contents')->with('success', 'Content saved!');
    
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
        $content = Content::find($id);
        return view('contents.edit', compact('content')); 
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
            'text'=>'required',
            'bold'=>'boolean',
            'italics'=>'boolean',
            'strikethrough'=>'boolean',
            'createlinks'=>'boolean',
            'centertext'=>'boolean',
            'h1'=>'boolean',
            'h2'=>'boolean',
            'h3'=>'boolean',
        ]);

        $content = Content::find($id);
        $content->text = $request->get('text');
        $content->bold = $request->get('bold');
        $content->italics = $request->get('italics');
        $content->strikethrough = $request->get('strikethrough');
        $content->createlinks = $request->get('createlinks');
        $content->centertext = $request->get('centertext');
        $content->h1 = $request->get('h1');
        $content->h2 = $request->get('h2');
        $content->h3 = $request->get('h3');
        $content->save();

        return redirect('/contents')->with('success', 'Content updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();

        return redirect('/contents')->with('success', 'Content deleted!');
    }
}
