<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/posts', function () {
    // membuat variabel posts yang berisi array bersarang
    $posts = [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Niel',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Niel 2',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fugit modi culpa explicabo natus architecto..'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
