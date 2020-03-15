@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <table class="table table-bordered" id="tags-table">
            <thead>
            <tr>
                <th>Name</th>
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
            $('#tags-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: 'http://blog1.test/admin/tags/datatable',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    {
                        class: 'text-center',
                        data: 'id',
                        name: 'id', 'render': function ( data, type, row ) {
                            return "<a href='http://blog1.test/admin/tags/"+ data+"/edit' class='btn btn-primary'>Edit</a>";
                        },
                    },
                ]
            });
        });
    </script>
@endpush