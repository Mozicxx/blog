<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request,Post $post)
    {
        $post->addComment(
            new Comment($request->all())
        );
//        return redirect('posts/' . $post->id);
        return back();
    }
}
