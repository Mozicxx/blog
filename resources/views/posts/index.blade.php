@extends('layout')

@section('content')
    <div class="title m-b-md">
        Posts
    </div>
    <div class="links">

        @foreach ($posts as $post)
            <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
        @endforeach
    </div>
@stop