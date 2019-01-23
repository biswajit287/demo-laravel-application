@extends('layouts.app');

@section('content')

    <h1 style="margin-top:40px;">Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title:')}}
            {{Form::text('title',$post->title,['class' => 'form-control', 'placeholder'=> 'Enter the Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body',$post->body,['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Write the body of the post..'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection