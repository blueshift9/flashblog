@extends('layouts.admin')

@section('header')
    <h2>Edit Post</h2>
@endsection

@section('content')
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('PATCH')

        {{ csrf_field() }}
        <label class="block form-control">
            <span class="text-gray-700">Title</span>
            <input type="text" class="form-input mt-1 block w-full" id="title" name="title" aria-describedby="title" placeholder="title" value="{{ $post->title }}" >
        </label>

        <label for="excerpt" class="block form-control">
            <span class="text-gray-700">Excerpt</span>
            <div class="">
                <textarea id="excerpt" class="form-textarea mt-1 block w-full" name="excerpt" placeholder="excerpt" >{{ $post->excerpt }}</textarea>
            </div>
        </label>

        <label for="description" class="block form-control">
            <span class="text-gray-700">Body</span>
            {{--<div class="editor">--}}
{{--
            <textarea id="description"  class="form-textarea mt-1 block w-full"  name="description" placeholder="description" rows="10">{{ $post->description }}</textarea>
--}}

            <input id="description" type="hidden" name="description" placeholder="Post Body" value="{{ $post->description }}" {{--class="form-textarea mt-1 block w-full"--}}>
            <trix-editor input="description"></trix-editor>
            {{--</div>--}}
        </label>

        {{--<div class="block form-control">
            <span class="text-gray-700">Active</span>
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input class="form-radio" type="radio" name="active" id="active-yes" value="{{ $post->active }}" checked>
                        <span class="ml-2">Yes</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input class="form-radio" type="radio" name="active" id="active-no" value="0">
                        <span class="ml-2">No</span>
                    </label>
                </div>
            </div>
        </div>--}}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
        <button  type="submit" class="btn-submit form-control">
            <i class="fas fa-save"></i> Save Post
        </button>
    </form>
@endsection

@push('scripts')
    <script>
        $(function() {


        });
    </script>
@endpush