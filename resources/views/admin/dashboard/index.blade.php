@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                Welcome to your dashboard @if(Auth::check())
                    {{Auth::user()->first_name}}
                @endif
                <p> You can visit the repository for this project on
                    <a href="https://github.com/blueshift9/flashblog">github</a>.
                </p>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(function () {

        });
    </script>
@endpush