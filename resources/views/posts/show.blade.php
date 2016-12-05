@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $post->title }}</h1>
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        {{ $comment->content }}
                        @if(Auth::id() == $comment->user->id)
                            <a href="/comments/{{ $comment->id }}/edit">Edit</a>
                            <a href="/comments/{{ $comment->id }}/delete" style="color: #cc0000">Delete</a>
                        @endif
                        <a href="#" class="pull-right">{{ $comment->user->name }}</a>
                    </li>
                @endforeach
            </ul>
            <h3>Add a New Comment</h3>

            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                    <textarea name="content" class="form-control">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            @if (count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="color:red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@stop