@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-3/4 shadow mx-auto p-8 bg-gray-100">
            <h2>{{ $post->title }}</h2>

            {!! $post->description !!}
        </div>
    </div>
@endsection
