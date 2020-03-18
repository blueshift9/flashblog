@extends('layouts.admin')

@section('content')

    <a class="btn btn-primary">Create</a>

    <div class="col-md-12">
        <table class="table table-bordered" id="posts-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
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
        $(function() {
            $('#posts-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: 'http://blog1.test/admin/posts/datatable',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'description', name: 'description' },
                    { data: 'active', name: 'active' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    {
                        class: 'text-center',
                        data: 'id',
                        name: 'id', 'render': function ( data, type, row ) {
                            return "<a href='http://blog1.test/admin/posts/"+ data+"/edit' class='btn btn-primary'>Edit</a>";
                        },
                    },

                ]
            });
        });
    </script>
@endpush