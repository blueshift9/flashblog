@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                Welcome to your dashboard, @if(Auth::check())
                    {{Auth::user()->name}}
                @endif!
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(function() {

        });
    </script>
@endpush