<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


      
       
        return view('posts.index', [
            'posts' =>  Post::latest()->filter(request(['search','category','author']))->paginate(6)
            
        ]);

    }

    public function show(Post $post)
    {
        $comment=$post->comments()->get();

        return view('posts.show', [
            'post' => $post,
            'comments'=>$comment

        ]);
    }

}
  