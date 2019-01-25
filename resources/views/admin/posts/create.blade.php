@extends('layouts.admin')

@section('content')

    <div class="col-xs-12 col-md-6">
        <h2>Create New Post</h2>
        <form method="post" action="{{ url('admin/posts') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" placeholder="Description"></textarea>
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

        });
    </script>
@endpush