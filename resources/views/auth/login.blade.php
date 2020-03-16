@extends('layouts.login')

@section('content')

    <div class="w-full max-w-xs ">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}"
              aria-label="{{ __('Login') }}">
            {{ __('Login') }}
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    {{ __('E-Mail Address') }}
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('email') ? ' is-invalid' : '' }}"/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    {{ __('Password') }}
                </label>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password"
                       id="password" type="password" placeholder="******************" required>
                {{--
                                <p class="text-red-500 text-xs italic">Please choose a password.</p>
                --}}
            </div>
            <div class="mb-6">
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
                <input class="form-check-input" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>


            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                    {{ __('Login') }}
                </button>

                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">

        </p>
    </div>

@endsection
