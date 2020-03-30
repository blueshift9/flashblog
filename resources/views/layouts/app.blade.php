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
    <script src="https://kit.fontawesome.com/1a954aa436.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
{{--
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet" type="text/css">
--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">
{{--<div class="border-b border-indigo-darkest bg-teal py-4 px-20">
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
                    <a href="{{ route('login') }}" class="no-underline font-bold block mt-4 sm:inline-block sm:mt-0 text-grey-lighter hover:text-grey-light mr-4">
                        Admin
                    </a>

                </div>
            </div>
        </nav>
    </div>
</div>--}}


    <div id="app" class="container mx-auto">
        <nav class="bg-white px-8 pt-2 shadow-md mx-2">
            <div class="-mb-px flex justify-center">
                <a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    Home
                </a>
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    About
                </a>
                <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8" href="#">
                    Contact
                </a>
            </div>
            <div class="-mb-px flex float-right">
                <form action="{{ config('app.url') }}" method="get">
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                type="search" name="search" placeholder="Search" value="{{ request()->query('search') }}">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                    width="512px" height="512px">
            <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
                        </button>
                    </div>
                </form>
            </div>
        </nav>
        <main class="my-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
