@if ($message = Session::get('success'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-teal-500">

        <span class="inline-block align-middle mr-8">
            <b class="capitalize">Success!</b> {{ $message }}
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500-500">

        <span class="inline-block align-middle mr-8">
            <b class="capitalize">There was a problem!</b> {{ $message }}
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-yellow-500-500">

        <span class="inline-block align-middle mr-8">
            <b class="capitalize">Warning!</b> {{ $message }}
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif

{{ $message }}

@if ($message = Session::get('info'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-blue-500">

        <span class="inline-block align-middle mr-8">
            <b class="capitalize">Success!</b> {{ $message }}
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif


@if ($errors->any())
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
        <span class="inline-block align-middle mr-8">
            <b>There was at least one error: </b><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
            <span>×</span>
        </button>
    </div>
@endif