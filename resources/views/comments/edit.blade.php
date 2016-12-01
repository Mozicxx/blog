@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Edit the Comment</h1>
        {{--method : post--}}
        <form method="POST" action="/comments/{{ $comment->id }}">
            {{--<input type="hidden" name="_method" value="PATCH">--}}
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="content" class="form-control">{{ $comment->content }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
</div>
@stop