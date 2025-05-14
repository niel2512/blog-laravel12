<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
    return [
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
    }

    public static function find($slug)
    {
     // Memanggil helper array
     //static all untuk memanggil function all di class yg sama

     //  return Arr::first(static::all(), function($p) use ($slug){
     //     return $p['slug'] == $slug;
     // });

     // Menggunakan arrow function
     return Arr::first(static::all(), fn($p) => $p['slug'] == $slug) ?? abort(404);
    }
}