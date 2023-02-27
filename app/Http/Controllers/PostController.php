<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      return view('blog',[
         'title' => 'All Post',
         'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(7)
       ]);
    }

    public function show(Post $post){
      return view('post',[
         'title' => 'Blog',
         'post' => $post
       ]);
    }
}
