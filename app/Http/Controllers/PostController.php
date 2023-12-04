<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function comment()
    {
        $values = Post::with('comments')->get();

        return view("posts.comment", compact("values"));
    }

    public function name()
    {
        $values = Post::with('name')->get();
        
        return view("posts.name", compact("values"));
    }

}