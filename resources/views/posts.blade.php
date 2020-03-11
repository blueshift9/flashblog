@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-12">
            <h1>Latest Posts</h1>
        </div>
    </div>
    <div class="">
        @foreach($posts as $post)
            <div id="post-{{ $post->id }}" class="max-w rounded overflow-hidden shadow-lg my-16">
                <img id="post-image-{{ $post->id }}" class="w-full"
                     src="https://placekitten.com/1024/230" alt="Card image cap">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                    <p class="text-gray-700 text-base">
                        {!! $post->description !!}
                    </p>
                </div>
                {{--<div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <em>
                      by  {{ $post->user->name }} on {{ $post->created_at->format('m-d-Y  H:i') }}
                    </em>
                    <p class="card-text">{!! $post->description !!}</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>--}}
            </div>
        @endforeach
    </div>
</div>
@endsection
