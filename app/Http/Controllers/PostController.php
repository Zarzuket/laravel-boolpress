<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { 
        $tags = Tag::all();
        $posts = Post::all();
        return view("guest.post.index" , compact("posts" , "tags"));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if(!$post) {
            abort("404");
        }

        return view("guest.post.show", compact("post"));
    }
}
