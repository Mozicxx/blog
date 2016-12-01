<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function addComment(Comment $comment)
    {
        return $this->comments()->save($comment);
    }
}
