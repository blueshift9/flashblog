@extends('layouts.admin')

@section('content')

    <a href="" class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
        <i class="fas fa-plus"></i> Create Post
    </a>

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