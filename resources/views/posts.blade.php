@extends('layouts.app')

@section('content')
<div class="container">
        @foreach($posts as $post)
            <div id="post-{{ $post->id }}" class="max-w rounded overflow-hidden shadow-lg my-16 mx-2 bg-white">
                <img id="post-image-{{ $post->id }}" class="w-full"
                     src="https://placekitten.com/1024/230" alt="Card image cap">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 post-title">
                        <a href="{{--{{ route($post->slug) }}--}}">{{ $post->title }}</a>
                        </div> {{ $post->slug }}
                    <p class="text-gray-600 text-base">
                        {!! $post->description !!}
                    </p>
                </div>
                <!-- use below for tags -->
                <div class="px-6 py-4">
                    @foreach($post->tags as $tag)
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</span>
                    @endforeach
                    {{--<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>--}}
                </div>
            </div>
        @endforeach
</div>
@endsection
