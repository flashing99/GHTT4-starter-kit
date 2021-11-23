@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Login basic -->
            <div class="card mb-0">
                <div class="card-body  px-4">
                    <a href="#" class="brand-logo  ">
                        <img src="{{ asset('images/logo/logo.png') }}" />
                        <h2 class="brand-text text-primary ms-1 text-center text-uppercase fs-4">Groupe Hôtellerie, Tourisme
                            et Thermalisme</h2>
                    </a>

                    <h4 class="card-title mb-1 text-center">Bienvenue sur GHTT ADMIN ! ✋</h4>
                    <p class="card-text mb-2 text-center ">Veuillez vous connecter à votre compte pour accèder à votre
                        espace. </p>
                    {{-- <p class="card-text mb-2">Veuillez vous connecter à votre compte pour accèder à votre espace 👋. </p> --}}

                    <form class="auth-login-form mt-2 " {{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="text" class="form-control " id="email" name="email" placeholder="john@example.com"
                                aria-describedby="email" tabindex="1" autofocus />

                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password-forget">Mot de passe</label>
                                <a href="{{ url('auth/forgot-password-basic') }}">
                                    <small>Mot de passe oublié?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" {{-- class="form-control form-control-merge @error('email') is-invalid @enderror" --}} class="form-control form-control-merge  "
                                    id="password" name="password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                            {{-- @error('password')
                                <span class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                                <label class="form-check-label" for="remember-me">Se souvenir de moi </label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" tabindex="4">Se connecter</button>
                    </form>

                    <p class="text-center mt-2 ft-6">
                        <span>Vous n'avez pas de compte? </span>
                        <a href="{{ route('register') }}">
                            <span>S'inscrire</span>
                        </a>
                    </p>

                    {{-- <div class="divider my-2">
                        <div class="divider-text">or</div>
                    </div>

                   <div class="auth-footer-btn d-flex justify-content-center">
                        <a href="#" class="btn btn-facebook">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="btn btn-twitter white">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="btn btn-google">
                            <i data-feather="mail"></i>
                        </a>
                        <a href="#" class="btn btn-github">
                            <i data-feather="github"></i>
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- /Login basic -->
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/auth-login.js')) }}"></script>
@endsection
