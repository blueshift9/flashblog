@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($posts as $post)
            <div id="post-{{ $post->id }}" class="max-w rounded overflow-hidden shadow-lg my-16 mx-2 bg-white">
                <img id="post-image-{{ $post->id }}" class="w-full"
                        src="https://placekitten.com/1024/230" alt="Card image cap">
                <div class="px-6 py-4">
                    @isset($post->excerpt)
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ $post->excerpt}}</p>@endisset
                    <div class="font-bold text-4xl mb-2 post-title">
                        <a href="posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </div>
                </div>
                <!-- use below for tags -->
                <div class="px-4 pt-3 pb-4 border-t border-b border-gray-300 bg-gray-100">
                    <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Author</div>
                    <div class="flex items-center pt-2">
                        <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://lh3.googleusercontent.com/-MEYMnSK29aQ/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJNj3dFpqFKWkQiZ1ZwIlf0Y04vAPA.CMID/s83-c/photo.jpg)">
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">{{ $post->user->first_name }} {{ $post->user->last_name }}</p>
                            <p class="text-sm text-gray-700">{{ \Carbon\Carbon::parse($post->created_at)->format('M d Y h:ia')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4">
                    @foreach($post->tags as $tag)
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</span>
                    @endforeach
                    {{--<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>--}}
                </div>
            </div>
        @empty
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-16 mx-2" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">No results!</p>
                        <p class="">We found no results for <span class="font-bold">{{ request()->query('search') }}</span>.</p>
                    </div>
                </div>
            </div>
        @endforelse

        {{ $posts->appends(['search' => request()->query('search')])->links() }}
    </div>
@endsection
