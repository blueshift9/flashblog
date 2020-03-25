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

    <script src="{{ asset('js/app.js') }}"></script>

    {{--<script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>--}}
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
{{--
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
--}}

    <script src="https://kit.fontawesome.com/1a954aa436.js" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/tailwind.min.css">


    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

    {{--<script src="{{ asset('js/summernote/summernote-bs4.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/summernote/summernote-bs4.css') }}"/>--}}

    {{--<script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>
    <link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>


</head>
<body class="bg-gray-200">
{{--<div id="app">

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ config('app.url') }}/admin">
            {{ config('app.name') }}
        </a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-size: 10px;" href="#"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>--}}

<div id="root" class="">
    <nav
            class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
    >
        <div
                class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
            <button
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    type="button"
                    onclick="toggleNavbar('example-collapse-sidebar')"
            >
                <i class="fas fa-bars"></i></button
            >
            <a
                    class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)"
            >
                {{ config('app.name') }}
            </a>
            {{--
                        <ul class="md:hidden items-center flex flex-wrap list-none">
                            <li class="inline-block relative">
                                <a
                                        class="text-gray-600 block py-1 px-3"
                                        href="#pablo"
                                        onclick="openDropdown(event,'notification-dropdown')"
                                ><i class="fas fa-bell"></i
                                    ></a>
                                <div
                                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                        style="min-width: 12rem;"
                                        id="notification-dropdown"
                                >
                                    <a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Action</a
                                    ><a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Another action</a
                                    ><a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Something else here</a
                                    >
                                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                                    <a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Seprated link</a
                                    >
                                </div>
                            </li>
                            <li class="inline-block relative">
                                <a
                                        class="text-gray-600 block"
                                        href="#pablo"
                                        onclick="openDropdown(event,'user-responsive-dropdown')"
                                >
                                    <div class="items-center flex">
                              <span
                                      class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                              ><img
                                          alt="..."
                                          class="w-full rounded-full align-middle border-none shadow-lg"
                                          src="./assets/img/team-1-800x800.jpg"
                                  /></span></div
                                    >
                                </a>
                                <div
                                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                        style="min-width: 12rem;"
                                        id="user-responsive-dropdown"
                                >
                                    <a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Action</a
                                    ><a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Another action</a
                                    ><a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Something else here</a
                                    >
                                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                                    <a
                                            href="#pablo"
                                            class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                    >Seprated link</a
                                    >
                                </div>
                            </li>
                        </ul>
            --}}
            <div
                    class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                    id="example-collapse-sidebar"
            >
                <div
                        class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300"
                >
                    <div class="flex flex-wrap">
                        <div class="w-6/12">
                            <a
                                    class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                                    href="javascript:void(0)"
                            >
                                {{ config('app.name') }}
                            </a>
                        </div>
                        <div class="w-6/12 flex justify-end">
                            <button
                                    type="button"
                                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                    onclick="toggleNavbar('example-collapse-sidebar')"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <form class="mt-6 mb-4 md:hidden">
                    <div class="mb-3 pt-0">
                        <input
                                type="text"
                                placeholder="Search"
                                class="px-3 py-2 h-12 border border-solid  border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                        />
                    </div>
                </form>
                <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                    <li class="items-center">
                        <a
                                class="text-blue-500 hover:text-blue-600 text-xs uppercase py-3 font-bold block"
                                href="{{ config('app.url') }}/admin"
                        ><i class="fas fa-home opacity-75 mr-2 text-sm"></i>
                            Admin Home</a
                        >
                    </li>
                    <li class="items-center">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="{{ config('app.url') }}/admin/posts"
                        ><i class="fas fa-newspaper text-gray-500 mr-2 text-sm"></i>
                            Posts</a
                        >
                    </li>
                    <li class="items-center">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="{{ config('app.url') }}/admin/users"
                        ><i class="fas fa-user-circle text-gray-500 mr-2 text-sm"></i>
                            Users</a
                        >
                    </li>
                    <li class="items-center">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                                href="{{ config('app.url') }}/admin/tags"
                        ><i class="fas fa-tag text-gray-500 mr-2 text-sm"></i>
                            Tags</a
                        >
                    </li>
                </ul>
                <hr class="my-4 md:min-w-full"/>
                {{--<h6
                        class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
                >
                    Documentation
                </h6>
                <ul
                        class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
                >
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/styles"
                        ><i
                                    class="fas fa-paint-brush mr-2 text-gray-500 text-base"
                            ></i>
                            Styles</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/alerts"
                        ><i class="fab fa-css3-alt mr-2 text-gray-500 text-base"></i>
                            CSS Components</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/vue/alerts"
                        ><i class="fab fa-vuejs mr-2 text-gray-500 text-base"></i>
                            VueJS</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/react/alerts"
                        ><i class="fab fa-react mr-2 text-gray-500 text-base"></i>
                            React</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/angular/alerts"
                        ><i class="fab fa-angular mr-2 text-gray-500 text-base"></i>
                            Angular</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/javascript/alerts"
                        ><i class="fab fa-js-square mr-2 text-gray-500 text-base"></i>
                            Javascript</a
                        >
                    </li>
                </ul>--}}
            </div>
        </div>
    </nav>
    <div class="relative md:ml-64 bg-gray-200">

        <div class="px-4 md:px-10 mx-auto w-full">
            @include('admin/partials/message')
            <div class="admin-header shadow">
                @yield('header')
            </div>

            <div class="admin-body shadow">
                @yield('content')
            </div>
        </div>

    </div>
</div>
@stack('scripts')
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();

    /* Sidebar - Side navigation menu on mobile/responsive mode */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
    }

    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        var popper = new Popper(element, document.getElementById(dropdownID), {
            placement: "bottom-end"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>
</body>
</html>
