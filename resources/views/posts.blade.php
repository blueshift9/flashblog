@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12">
            <h1>Latest Posts</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($posts as $post)
            <div id="post-{{ $post->id }}" class="card col-xs-12  mb-5">
                <img id="post-image-{{ $post->id }}" class="card-img-top img-fluid"
                     src="https://placekitten.com/1024/230" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{!! $post->description !!}</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
