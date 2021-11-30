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

                    <h4 class="card-title mb-1">Réinitialiser le mot de passe 🔒</h4>
                    <p class="card-text mb-2">Your new password must be different from previously used passwords</p>


                    <form class="auth-reset-password-form mt-2" action="{{ route('password.update') }}" method="POST"
                        enctype="multipart/form-data">

                        {{-- //------------- --}}
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        @if (session('status'))
                            <div class="alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- //------------- --}}
                        <div class="mb-1">
                            <label for="email" class="form-label">Votre email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text">
                                    <i data-feather="mail"></i>
                                </span>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror " id="email"
                                    name="email" placeholder="Votre email" aria-describedby="email" tabindex="2" autofocus
                                    value="{{ old('email') }}" />
                            </div>
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        {{-- //------------- --}}
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reset-password-new">Nouveau mot de passe</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">

                                <input type="password" name="password"
                                    class="form-control form-control-merge  @error('password') is-invalid @enderror"" id="
                                    reset-password-new"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="reset-password-new" tabindex="1" autofocus />
                                <span class="input-group-text cursor-pointer">
                                    <i data-feather="eye"> </i>
                                </span>

                                @error('password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        {{-- //------------- --}}
                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="reset-password-confirm">Confirmer le mot de passe</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">

                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-merge @error('password_confirmation') is-invalid @enderror"
                                    id="reset-password-confirm"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="reset-password-confirm" tabindex="2" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>



                        <button class="btn btn-primary w-100" tabindex="3">Réinitialiser le mot de passe</button>
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
