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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
