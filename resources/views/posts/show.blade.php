
@extends('layouts.app');

@section('content')

<div style="margin-top:40px;"><a href="/posts">Go Back</a></div>
    <h1 style="margin-top:20px;">{{$post->title}}</h1>
   
    <small>Written on {{$post->created_at}} </small>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close()  !!}

@endsection