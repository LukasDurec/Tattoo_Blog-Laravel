<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;

class UPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post(post $post)
    {
        return view('user.post',compact('post'));
    }

    public function getAllPosts()
    {
        return $posts = post::orderBy('created_at','DESC');
    }
}
