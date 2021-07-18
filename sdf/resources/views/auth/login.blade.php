@extends('auth')
@section('content')

    <div class="bg-image" style="background-image: url('assets/media/photos/photo28@2x.jpg');">
        <div class="row no-gutters bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <a class="link-fx font-w600 font-size-h2 text-white" href="{{url('/')}}">
                            SDF<span class="font-w400"> Web Application 1.0</span>
                        </a>
                        <p class="text-white-75 mr-xl-8 mt-2">
                            Welcome to your amazing app. Feel free to login and start managing your projects and clients.
                        </p>
                    </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center font-size-sm">
                    <p class="font-w500 text-white-50 mb-0">
                        <strong>SDF Web Application</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline mb-0 py-2">
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 font-w500" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Meta Info Section -->

            <!-- Main Section -->
            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-white">
                <div class="p-3 w-100 d-lg-none text-center">
                    <a class="link-fx font-w600 font-size-h3 text-blue" href="{{ url('/') }}">
                        One<span class="font-w400">UI</span>
                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <a class="link-fx font-w600 font-size-h3 text-blue" href="{{url('/')}}">
                                SDF<span class="font-w400"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Web Application</span>
                            </a>
                            <h1 class="font-w700 mb-2">
                                Sign In
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Welcome, please login or <a class="link-fx font-w600 text-blue" href="{{ route('register') }}">Register</a> for a new account.
                            </h2>

                        </div>
                        <!-- END Header -->
                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row no-gutters justify-content-center">

                            <div class="col-sm-8 col-xl-4">
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <x-jet-validation-errors class="mt-4" />
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div>
                                        <!--<x-jet-label for="email" value="{{ __('Email') }}" />-->
                                        <x-jet-input id="email" class="form-control form-control-lg form-control-alt py-4" placeholder="{{ __('Email') }}" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <div class="mt-4">
                                        <!--<x-jet-label for="password" value="{{ __('Password') }}" />-->
                                        <x-jet-input id="password" class="form-control form-control-lg form-control-alt py-4" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <div class="mt-4">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember" >
                                            <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                                        </div>

                                    </div>

                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <div>

                                            @if (Route::has('password.request'))
                                                <a class="text-muted font-size-sm font-w500 d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif


                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1 opacity-50"></i>{{ __('Login') }}
                                            </button>
                                        </div>


                                    </div>


                                    <div class="flex items-center justify-end mt-4">
                                        @if (JoelButcher\Socialstream\Socialstream::show())
                                            <x-socialstream-providers />
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                    <p class="font-w500 text-black-50 py-2 mb-0">
                        <strong>OneUI 4.9</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline py-2 mb-0">
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted font-w500" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Main Section -->
        </div>
    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    </div>
@endsection
@section('js')
    <!-- Page JS Code -->
    <script src="{{asset('assets/auth/op_auth_signin.min.js') }}"></script>
@endsection
