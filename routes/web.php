<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    // membuat variabel posts yang berisi array bersarang
    $posts = [
        [
            'id'=> '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Niel',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Niel 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
        [
            'id'=> '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Niel',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Niel 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ]
    ];
    // Memanggil helper array
    $p = Arr::first($posts, function($p) use ($slug){
        return $p['slug'] == $slug;
    });

    if(!$p) abort(404);

    return view('post', ['title' => 'Single Post', 'p' => $p]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
