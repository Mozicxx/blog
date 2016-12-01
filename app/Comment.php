<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];//允许使用create()和update()执行批量创建和更新的字段
    public function post()
    {
        return $this->belongsTo('App\Post');
//        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
