<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagsController extends Controller
{

    public function index()
    {
        return view('admin.tags.index')->with('tags', Tag::all());
    }




    public function store(Request $request)
    {

        $this->validate($request, [

            'tag' => 'required'

            ]);

        Tag::create([

            'tag' => $request->tag

        ]);

    Session::flash('success', 'Tag created succefully');

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




    public function edit($id)
    {

        $tag = Tag::find($id);

        return view('admin.tags.edit')->with('tag', $tag);




    }

    public function create()
    {

        return view('admin.tags.create');

    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'tag' => 'required'

        ]);

        $tag = Tag::find($id);

        $tag->tag = $request->tag;

        $tag->save();

        Session::flash('success', 'Tag updated');

        return redirect()->back();

    }


    public function destroy($id)
    {
        Tag::destroy($id);

        Session::flash('success', 'tag deleted');

        return redirect()->back();

    }
}
