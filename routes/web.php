<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        'title' => 'home'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'active' => 'category',
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category: $category->name",
        'posts' => $category->posts->load('category', 'author') //N+1 sembuh dengan load('relasi', 'relasi')
    ]);
});

Route::get('/penulis', function(){
    return view('penulis', [
        'active' => 'penulis',
        'title' => 'Penulis',
        'penulis' => User::all()
    ]);
});

Route::get('/post/penulis/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author: $author->username",
        'posts' => $author->posts->load('category', 'author') //N+1 sembuh dengan load('relasi', 'relasi')
    ]);
});