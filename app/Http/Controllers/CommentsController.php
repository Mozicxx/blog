<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request,Post $post)
    {
        $this->validate($request, [
            'content' => 'required|min:2'
        ]);
        $comment = new Comment($request->all());
        //Auth::id()为当前登录用户id
        $post->addComment($comment,Auth::id());
//        return redirect('posts/' . $post->id);
        return back();
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit',compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());

        return redirect('posts/' . $comment->post->id);
    }

    public function delete(Comment $comment)
    {
        $comment->delete();

        return redirect('posts/' . $comment->post->id);
    }
}
