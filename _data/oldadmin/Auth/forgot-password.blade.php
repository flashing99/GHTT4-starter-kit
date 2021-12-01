@extends('layouts/fullLayoutMaster')

@section('title', 'Forgot Password')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Forgot Password basic -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="#" class="brand-logo  ">
                        <img src="{{ asset('images/logo/logo.png') }}" />
                        <h2 class="brand-text text-primary ms-1 text-center text-uppercase fs-4">Groupe Hôtellerie, Tourisme
                            et Thermalisme</h2>
                    </a>

                    <h4 class="card-title mb-1 text-center">Bienvenue sur GHTT ADMIN ! ✋</h4>

                    <h4 class="card-title mb-1">Mot de passe oublié ? 🔒</h4>
                    <p class="card-text mb-2">Entrez votre email et nous vous enverrons des instructions pour réinitialiser
                        votre mot de passe </p>

                    <form class="auth-forgot-password-form mt-2" action="{{ route('password.email') }}" method="POST"
                        enctype="multipart/form-data">
                        {{-- //------------- --}}
                        @csrf
                        @if (session('status'))
                            <div class="alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- //------------- --}}
                        <div class="mb-1">
                            <label for="forgot-password-email" class="form-label">Email</label>

                            <input type="text" name="email" id="forgot-password-email"
                                class="form-control  @error('email') is-invalid @enderror" name="forgot-password-email"
                                placeholder="votre-email@example.com" aria-describedby="forgot-password-email" tabindex="1"
                                autofocus />

                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>


                        <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
                    </form>
                    <p class="text-center mt-2">
                        <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Retour à la connexion
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Forgot Password basic -->
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/auth-forgot-password.js')) }}"></script>
@endsection
