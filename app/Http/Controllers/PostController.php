<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'Semua Posts',
            //'posts' => Post::all()
            'posts' => Post::with(['author', 'category'])->latest()->get() //N+1 sembuh dengan with(['relasinya'])
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
