@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', 'Welcome page')

@section('page-style')
    {{-- Page Css files --}}
    {{-- <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}"> --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-cover">
        <div class="auth-inner row m-0">


            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    @if ($configData['theme'] === 'dark')
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2-dark.svg') }}" alt="Login V2" />
                    @else
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2.svg') }}" alt="Login V2" />
                    @endif
                    {{--  --}}
                    {{-- @if ($configData['theme'] === 'dark')
                        <img class="img-fluid" src="{{ asset('images/pages/coming-soon-dark.svg') }}"
                            alt="Coming soon page" />
                    @else
                        <img class="img-fluid" src="{{ asset('images/pages/coming-soon.svg') }}"
                            alt="Coming soon page" />
                    @endif --}}
                </div>
            </div>
            <!-- /Left Text-->

            <!-- Login-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto text-center">
                    <!-- Brand logo-->
                    <a class="brand-logo mb-3 position-relative start-0 mb-4 " href="#">
                        <img src="{{ asset('images/logo/logo.png') }}" />

                        <h2 class="brand-text text-primary m-0 mt-1">Groupe HTT </h2>
                        <h5>Groupe Hôtellerie, Tourisme et Thermalisme</h5>
                    </a>


                    <div class="divider my-2">
                        <div class="divider-text"></div>
                    </div>
                    <!-- /Brand logo-->
                    <h3 class="card-title   fw-bold mb-1 ">Bienvenu sur<span class="text-primary fw-600">
                            GHTT ADMIN </span>
                    </h3>
                    <p class="card-text mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error explicabo
                        molestias non nihil inventore, eligendi voluptas provident odit vitae ipsa quas qui aut.!
                    </p>

                    <div class="divider my-2">
                        <div class="divider-text"></div>
                    </div>

                    @if (Route::has('register'))
                        <div class="  d-md-block  btn-block mb-2">

                            <a href="{{ route('register') }}" class="btn btn-primary w-100  _btn-block _btn-sm-block">
                                S'inscrire </a>

                        </div>
                    @endif
                    @if (Route::has('login'))
                        <div class="   d-md-block  btn-block">
                            {{-- <a href="{{ route('login') }}" class="btn btn-primary mb-1 btn-sm-block">Register</a> --}}
                            <a href="{{ route('login') }}" class="btn btn-secondary w-100 _btn-block _btn-sm-block">Se
                                connecter</a>
                        </div>
                    @endif
                    {{-- <form class="auth-login-form mt-2" action="/" method="GET">
                        <div class="mb-1">
                            <label class="form-label" for="login-email">Email</label>
                            <input class="form-control" id="login-email" type="text" name="login-email"
                                placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                        </div>
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>
                                <a href="{{ url('auth/forgot-password-cover') }}">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge" id="login-password" type="password"
                                    name="login-password" placeholder="············" aria-describedby="login-password"
                                    tabindex="2" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                                <label class="form-check-label" for="remember-me"> Remember Me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                    </form> --}}
                    {{-- <p class="text-center mt-2">
                        <span>New on our platform?</span>
                        <a href="{{ url('auth/register-cover') }}"><span>&nbsp;Create an account</span></a>
                    </p>
                    <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>
                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a>
                        <a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a>
                        <a class="btn btn-google" href="#"><i data-feather="mail"></i></a>
                        <a class="btn btn-github" href="#"><i data-feather="github"></i></a>
                    </div> --}}
                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>
@endsection
{{-- @section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection --}}
{{-- @section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/auth-login.js')) }}"></script>
@endsection --}}
