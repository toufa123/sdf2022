@extends('auth')
@section('content')

    <div class="bg-primary-dark">
        <div class="row no-gutters bg-primary-dark-op">
            <!-- Meta Info Section -->
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <a class="link-fx font-w600 font-size-h2 text-white" href="{{url('/')}}">
                           SDF<span class="font-w400"> Web Application</span>
                        </a>
                        <p class="text-white-75 mr-xl-8 mt-2">
                            Creating a new account is completely free.
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
                    <a class="link-fx font-w600 font-size-h3 text-blue" href="{{url('/')}}">
                        SDF<span class="font-w400">Web Application</span>
                    </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <p class="mb-3">
                                <a class="link-fx font-w600 font-size-h3 text-blue" href="{{url('/')}}">
                                    SDF<span class="font-w400"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Web Application</span>
                                </a>

                            </p>
                            <h1 class="font-w700 mb-2">
                                Create Account
                            </h1>
                            <h2 class="font-size-base text-muted">
                                Get your access today in one easy step
                            </h2>
                        </div>
                        <!-- END Header -->
                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-4">
                                <x-jet-validation-errors class="mb-4" />
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mt-4">
                                        <!--<x-jet-label for="name" value="{{ __('Name') }}" />-->
                                        <x-jet-input id="name" placeholder="{{ __('Name') }}" class="form-control form-control-lg form-control-alt py-4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    <div class="mt-4">
                                        <!--<x-jet-label for="first_name" value="{{ __('first_name') }}" />-->
                                        <x-jet-input id="first_name" placeholder="{{ __('first_name') }}" class="form-control form-control-lg form-control-alt py-4" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                                    </div>
                                    <div class="mt-4">
                                        <!--<x-jet-label for="email" value="{{ __('Email') }}" />-->
                                        <x-jet-input id="email" placeholder="{{ __('Email') }}" class="form-control form-control-lg form-control-alt py-4" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <div class="mt-4">
                                        <label for="password" class="form-label">Select Country:</label>
                                        <select class="js-select2 form-control form-control-alt">

                                                    <option value="">-- {{ __('choose your country') }} --</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                                    @endforeach

                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <!--<x-jet-label for="password" value="{{ __('Password') }}" />-->
                                        <x-jet-input id="password" placeholder="{{ __('Password') }}" class="form-control form-control-lg form-control-alt py-4" type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                    <div class="mt-4">
                                        <!--<x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />-->
                                        <x-jet-input id="password_confirmation" placeholder="{{ __('Confirm Password') }}" class="form-control form-control-lg form-control-alt py-4" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                <label class="custom-control-label font-w400" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="font-size-sm font-w500" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">View Terms</a>
                                            </div>
                                        </div>
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                                <div class="flex items-center">
                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                    <div class="ml-2">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-jet-label>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                            <div class="py-2">
                                                <button type="submit" class="btn btn-lg btn-alt-success">
                                                    <i class="fa fa-fw fa-plus mr-1 opacity-50"></i> {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between font-size-sm text-center text-sm-left">
                    <p class="font-w500 text-black-50 py-2 mb-0">
                        <strong>SDF WebApplication</strong> &copy; <span data-toggle="year-copy"></span>
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

@endsection
@section('js')
    <!-- Page JS Code -->
    <script src="{{asset('assets/auth/op_auth_signup.min.js') }}"></script>
@endsection
