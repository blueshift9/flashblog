@extends('layouts.admin')

@section('content')

    <div class="col-xs-12 col-lg-6">
        <h2>Create New Tag</h2>
        <form method="post" action="{{ url('admin/tags') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Tag" required>
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