<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{       
    use HasFactory;
    protected $table = "posts";
    protected $primarykey = "id";
    public function postImage()
    {
        return $this->hasOne(PostImage::class);
    }
    public function comments()
    {
        return $this->hasMany('App\Models\comment');
    }
    public function catagories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}

