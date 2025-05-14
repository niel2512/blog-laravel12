<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//menggunakan model binding 
class Post extends Model 
{
 protected $fillable = ['title','author','slug','body']; //ini untuk memperbolehkan table tersebut diisi 
 // protected $guarded = ['id']; //ini untuk menjaga agar id tidak dapat diisi
}