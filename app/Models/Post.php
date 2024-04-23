<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'content'
    ];

    public function commentaires(){
        return $this->hasMany(Comment::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }
}
