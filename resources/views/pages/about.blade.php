
@extends('layouts.app')

@section('content')
    <h1>This is our about page</h1>
    <h3>Thanks for visiting here</h3>
    <ul class="list-group">
        @if(count($aboutus)>0)
            @foreach ($aboutus as $info)
                <li class="list-group-item">{{$info}}</li>
            @endforeach
        @endif
    </ul>
@endsection
