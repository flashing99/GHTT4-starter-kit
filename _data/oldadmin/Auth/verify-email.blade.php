@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
    {{-- Page Css files --}}
    {{-- <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}"> --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
    {{-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}"> --}}
@endsection

@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif



    @if ($message = Session::get('warning'))
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>

    @endif
    <div class="auth-wrapper auth-basic px-2">

        <div class="auth-inner my-2">
            <!-- Register basic -->
            <div class="card mb-0 text-center">

                <div class="card-body  px-4">

                    {{-- <div class="card-header">
                        <h4 class="card-title"> </h4>
                        <div class="heading-elements">
                            @if (Auth::check())
                                <a class="btn _btn-primary btn-outline-primary waves-effect" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="me-50" data-feather="home"></i> Accueil
                                </a>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}" style="display: none">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </div> --}}

                    <a href="#" class="brand-logo  ">
                        <img src="{{ asset('images/logo/logo.png') }}" />
                        <h2 class="brand-text text-primary ms-1 text-center text-uppercase fs-4">Groupe Hôtellerie, Tourisme
                            et Thermalisme</h2>
                    </a>

                    <h4 class="card-title mb-1">Bienvenue sur GHTT ADMIN ! ✋</h4>
                    <p class="card-text mb-2">Vérifier voter e-mail pour valider votre compte.</p>

                    {{-- <p class="text-center mt-2">
                        <span>Vous êtes déja membre?</span>
                        <a href="{{ route('login') }}">
                            <span>Se connecter</span>
                        </a>
                    </p> --}}
                    <div class="card-footer text-center">
                        @if (Auth::check())
                            <a class="btn btn-primary _btn-outline-primary waves-effect" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="me-50" data-feather="home"></i> Accueil
                            </a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}" style="display: none">
                                @csrf
                            </form>
                        @endif
                    </div>




                </div>
            </div>



            <div class="card py-4">
                <div class="card-body">
                    {{-- // Inform user after click resend verification email button is successful <--- this --}}
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success text-center">
                            Un nouveau lien de vérification vous a été envoyé à votre adresse e-mail !</div>
                    @endif
                    <div class="text-center mb-5">
                        {{-- // Instructions for new users <--- this --}}
                        <h3>Vérifier l'adresse e-mail</h3>
                        <p>Vous devez vérifier votre adresse e-mail pour accéder à cette page</p>
                    </div>
                    <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                        @csrf
                        <button type="submit" class="btn btn-primary">Renvoyer l'e-mail de vérification</button>
                    </form>
                </div>

            </div>



            <!-- /Register basic -->
        </div>
    </div>
@endsection
{{-- @section('vendor-script')
    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/auth-register.js') }}"></script>
@endsection --}}
