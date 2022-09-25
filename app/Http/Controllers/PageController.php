<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    
    public function home(Request $request)
    {
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}")->with('user')->latest()->paginate();

        return view('home', ["posts" => $posts]);
    }

    
    // public function blog()
    // {
    //     // Consultar a la base de datos
    //     //$posts = Post::get();
    //     //$posts = Post::first();
    //     //$posts = Post::find(25);
    //     //dd($posts);

    //     $posts = Post::latest()->paginate();
        
    //     return view('blog', ["posts" => $posts]);
    // }

    
    public function post(Post $post)
    {
        // Consultar a la base de datos

        return view('post', ["post" => $post]);
    }


}
