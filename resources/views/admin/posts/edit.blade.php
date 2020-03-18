@extends('layouts.admin')

@section('content')

    <div class="col-xs-12 col-lg-6">
        <h2>Edit Post</h2>
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            @method('PATCH')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="{{ $post->title }}" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Post Title" required>
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea id="excerpt" class="form-control summernote" name="excerpt" placeholder="excerpt">{{ $post->excerpt }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control summernote" name="description" placeholder="Description">{{ $post->description }}</textarea>
            </div>
            Active
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="active-yes" value="1" checked>
                <label class="form-check-label" for="active-yes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="active-no" value="0">
                <label class="form-check-label" for="active-no">
                    No
                </label>
            </div>
            <input type="hidden" name="user_id" value="1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

@push('scripts')
    <script>
        $(function() {
            // Define function to open filemanager window
            var lfm = function(options, cb) {
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
            $('#description, #excerpt').summernote({
                toolbar: [
                    ['popovers', ['lfm']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                ],
                buttons: {
                    lfm: LFMButton
                }
            });

        });
    </script>
@endpush