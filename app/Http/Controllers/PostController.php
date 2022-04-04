<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            'active' => 'posts',
            'title' => 'Semua Posts' . $title,
            //'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get() //N+1 sembuh dengan with(['relasinya']) protected $with = ['category', 'author']; di controllernyaa
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'active' => 'posts',
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
