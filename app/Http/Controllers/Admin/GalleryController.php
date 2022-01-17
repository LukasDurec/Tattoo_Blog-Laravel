<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\tag;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = gallery::all();
        return view("admin.gallery.show",compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
    {
        $tags = tag::all();
        return view("admin.gallery.create",compact("tags"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request,[
                "title"=>"required",
                "subtitle"=>"required",
                "author"=>"required",
                "image"=>"required",

            ]);
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public/gallery');
            }

            $gallery = new gallery();
            $gallery->image = $imageName;
            $gallery->title = $request->title;
            $gallery->subtitle = $request->subtitle;
            $gallery->author = $request->author;
            $gallery->created_at = now();
            $gallery ->save();
            $gallery->tags()->sync($request->tags);


            return redirect(route("gallery.index"));
        }
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
        $gallery = gallery::with('tags')->where('id',$id)->first();
        $tags = tag::all();
        return view("admin.gallery.edit",compact("gallery","tags"));
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
        {
            $this->validate($request,[
                "title"=>"required",
                "subtitle"=>"required",
                "author"=>"required",
                "image"=>"required",

            ]);
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public/gallery');
            }

            $gallery = new gallery();
            $gallery->image = $imageName;
            $gallery->title = $request->title;
            $gallery->subtitle = $request->subtitle;
            $gallery->author = $request->author;
            $gallery->created_at = now();
            $gallery ->save();
            //$post->tags()->sync($request->tags);


            return redirect(route("gallery.index"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gallery::where("id",$id)->delete();
        return redirect()->back();
    }
}
