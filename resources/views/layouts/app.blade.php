<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">
<div class="border-b border-indigo-darkest bg-teal py-4 px-3">
    <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap">
            <div class="flex items-center flex-no-shrink text-dark mr-6">
                <span class="font-semibold text-xl tracking-tight">Flashblog</span>
            </div>
            <div class="block sm:hidden">
                <button class="navbar-burger flex items-center px-3 py-2 border rounded text-gray border-gray-700 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div id="main-nav" class="w-full flex-grow sm:flex items-center sm:w-auto hidden">
                <div class="text-sm sm:flex-grow">
                    <a href="#" class="no-underline font-bold block mt-4 sm:inline-block sm:mt-0 text-grey-lighter hover:text-grey-light mr-4">
                        Admin
                    </a>

                </div>
            </div>
        </nav>
    </div>
</div>
    <div id="app" class="container mx-auto">

        <main class="my-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
