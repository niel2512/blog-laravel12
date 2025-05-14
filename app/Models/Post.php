<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

//menggunakan model binding 
class Post extends Model 
{
 // protected $guarded = ['id']; //ini untuk menjaga agar id tidak dapat diisi
 // protected $table = 'Post'; //ini digunakan kalau table kita tidak menggunakan default table laravel 'Posts' ada s nya
 use HasFactory; //agar bisa memanggil faker di tinker
 protected $fillable = ['title','author','slug','body']; //ini untuk memperbolehkan table tersebut diisi 

 public function author(): BelongsTo
 {
  return $this->belongsTo(User::class);
 }
}