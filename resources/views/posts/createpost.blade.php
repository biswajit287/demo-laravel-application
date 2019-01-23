@extends('layouts.app');

@section('content')

    <h1 style="margin-top:40px;">Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title:')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder'=> 'Enter the Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Write the body of the post..'])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection