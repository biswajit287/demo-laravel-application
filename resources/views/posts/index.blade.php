
@extends('layouts.app');

@section('content')

    <h1 style="margin-top:40px;">Posts</h1>
    @if(count($posts)>=1)
        @foreach ($posts as $post)
            <div style="padding:20px;" class="card bg-light">

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%; height:200px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <h3><a href="\posts\{{$post->id}}"><h3>{{$post->title}}</h3></a>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        <p style="padding:5px;">{{$posts->links()}}</p>
    @else
        <p>No Data Found!</p>
    @endif

@endsection