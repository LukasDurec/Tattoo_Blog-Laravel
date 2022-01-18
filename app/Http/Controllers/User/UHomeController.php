<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\tag;

class UHomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $posts = post::all();
        return view("user.home",compact("posts"));
    }

    public function blog()
    {
        $posts = post::all();
        return view("user.blog",compact("posts"));
    }

    public function tag(tag $tag)
    {
        $posts = $tag->posts;
        return view('user.tagposts',compact('posts','tag'));
    }

    public function gallery()
    {
        $galleries = gallery::all();
        return view("user.gallery",compact("galleries"));
    }


}
