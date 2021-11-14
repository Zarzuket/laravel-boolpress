<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { 
        $posts = Post::all();
        return view("guest.post.index" , compact("posts"));
    }
    public function show(Post $post ){
        return view("guest.post.show",compact("post"));
    }
}
