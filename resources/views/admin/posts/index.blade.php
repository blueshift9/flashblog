@extends('layouts.admin')

@section('header')
    <h2>Posts</h2> |
    <a href="{{ route('posts.create') }}">Create Post</a>
@endsection

@section('content')

    <div class="w-full-max-w-full">
        <table class="table-auto" id="posts-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

@endsection

@push('scripts')
    <script>
        $(function () {
            $('#posts-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: 'http://blog1.test/admin/posts/datatable',
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'user.first_name', name: 'description'},
                    {data: 'active', name: 'active'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {
                        class: 'text-center',
                        data: 'id',
                        name: 'id', 'render': function (data, type, row) {
                            return "<a href='http://blog1.test/admin/posts/" + data + "/edit' class='btn-submit'>Edit</a>";
                        },
                    },

                ],
                "order": [[4, "desc"]]

            });
        });
    </script>
@endpush