<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    // membuat variabel posts yang berisi array bersarang
    $posts = Post::all();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

// Route model binding {namamodel:slug} custom model binding untuk mencari berdasarkan slug
Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route model binding {namamodel:username} 
Route::get('/authors/{user:username}', function (User $user){
    return view('posts', ['title' => count($user->posts) . ' Article by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
