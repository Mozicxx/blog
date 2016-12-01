@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $post->title }}</h1>
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        {{ $comment->content }}
                        <a href="/comments/{{ $comment->id }}/edit">Edit</a>
                        <a href="#" class="pull-right">{{ $comment->user->username }}</a>
                    </li>
                @endforeach
            </ul>
            <h3>Add a New Comment</h3>

            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    {{-- 这里的name的取名通常和数据库表的字段名一样 --}}
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>
    </div>
@stop