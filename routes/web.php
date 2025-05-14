<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    // membuat variabel posts yang berisi array bersarang
    $posts = Post::all();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{id}', function ($id){
    $p = Post::find($id);
    return view('post', ['title' => 'Single Post', 'p' => $p]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
