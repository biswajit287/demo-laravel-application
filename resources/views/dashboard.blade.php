@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <a class="btn btn-primary" href="/posts/create">Create Post</a>
                   <h3 style="margin-top: 20px">Your Blog Posts:</h3>
                   @if (count($posts)>0)
                    <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
    
                            </tr>
                            @foreach ($posts as $post)
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                            <th>
                                {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!! Form::close() !!}
                            </th>
                            @endforeach
                        </table>
                   @else
                       <p>You Have No Post</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
