<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view("admin.posts.show",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();
        return view("admin.posts.create",compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title"=>"required",
            "subtitle"=>"required",
            "body"=>"required",
           // "image"=>"required",

        ]);

        $post = new post();
        //$post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->body;
        $post->created_at = now();
        $post ->save();
       // $post->tags()->sync($request->tags);

        return redirect(route("posts.index"));
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
        $post = post::where('id',$id)->first();
        return view("admin.posts.edit",compact("post"));
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
        $this->validate($request,[
            "title"=>"required",
            "subtitle"=>"required",
            "body"=>"required",
            // "image"=>"required",

        ]);

        $post = post::find($id);
        //$post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->body;
        $post->created_at = now();
        $post ->save();
        // $post->tags()->sync($request->tags);

        return redirect(route("posts.index"));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where("id",$id)->delete();
        return redirect()->back();
    }
}
