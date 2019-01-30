@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-12">
                Welcome to your dashboard, @if(Auth::check())
                    {{Auth::user()->name}}
                @endif!

                <h3>Things to do</h3>
                <ul>
                    <li>update to 5.7</li>
                    <li>Get a slug package, add slugs</li>
                    <li>change Create post to be logged in user, not user 1</li>
                    <li>js validator</li>
                    <li>add a Create post button</li>
                    <li>use description for excerpt, add actual body text to post</li>
                    <li>look into a role plugin</li>
                </ul>
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