@extends('layouts.admin')

@section('header')
        <h2>Create New Post</h2>
@endsection

@section('content')

        <form method="post" action="{{ url('admin/posts') }}">
            {{ csrf_field() }}
            <label class="block form-control">
                <span class="text-gray-700">Title</span>
                <input type="text" class="form-input mt-1 block w-full" id="title" name="title" aria-describedby="title" placeholder="title">
            </label>

            <label for="excerpt" class="block form-control">
                <span class="text-gray-700">Excerpt</span>
                <div class="">
                    <textarea id="excerpt" class="form-textarea mt-1 block w-full" name="excerpt" placeholder="excerpt" ></textarea>
                </div>
            </label>

            <label for="description" class="block form-control">
                <span class="text-gray-700">Body</span>
                <input id="description" type="hidden" name="description" placeholder="Post Body" {{--class="form-textarea mt-1 block w-full"--}}>
                <trix-editor input="description"></trix-editor>
            </label>

            <div class="block form-control">
                <span class="text-gray-700">Tags</span>
                <div class="mt-2">
                    <div>
                        <select id="tags" name="tags" class="form-multiselect mt-1 block w-full" multiple="multiple">
                            <option value="0"></option>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="block form-control">
                <span class="text-gray-700">Active</span>
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input class="form-radio" type="radio" name="active" id="active-yes" value="1" checked>
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
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            <button  type="submit" class="btn-submit form-control">
                <i class="fas fa-plus"></i> Create Post
            </button>
        </form>

@endsection

@push('scripts')
    <script>
        $(function() {

            $("#tags").select2({
                tags: false
            });

            // Define function to open filemanager window
           /* var lfm = function(options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                window.SetUrl = cb;
            };

            // Define LFM summernote button
            var LFMButton = function(context) {
                var ui = $.summernote.ui;
                var button = ui.button({
                    contents: '<i class="note-icon-picture"></i> ',
                    tooltip: 'Insert image with filemanager',
                    click: function() {

                        lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
                            lfmItems.forEach(function (lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        });

                    }
                });
                return button.render();
            };

            */

        });
    </script>
@endpush