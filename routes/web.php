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

Route::get('/posts/{slug}', function ($slug){
    $p = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'p' => $p]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
