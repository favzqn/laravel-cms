<?php

namespace App\Http\Controllers\Blog;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post){
        return view('blog.show')->with('post', $post);
    }
}
