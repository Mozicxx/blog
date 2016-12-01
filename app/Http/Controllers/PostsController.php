<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
//        $posts = DB::table('posts')->get();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        //查询时加载post的关系comments和comments的关系user
//        $post = Post::with('comments.user')->find($post->id);
        $post->load('comments.user');
        return View('posts.show', compact('post'));
    }
}
