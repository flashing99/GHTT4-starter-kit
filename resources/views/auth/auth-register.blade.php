@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <!-- Register basic -->
            <div class="card mb-0">
                <div class="card-body  px-4">
                    <a href="#" class="brand-logo  ">
                        <img src="{{ asset('images/logo/logo.png') }}" />
                        <h2 class="brand-text text-primary ms-1 text-center text-uppercase fs-4">Groupe Hôtellerie, Tourisme
                            et Thermalisme</h2>
                    </a>

                    <h4 class="card-title mb-1">Bienvenue sur GHTT ADMIN ! ✋</h4>
                    <p class="card-text mb-2">Veuillez créer votre compte pour accèder à votre espace.</p>

                    <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="name" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom"
                                aria-describedby="name" tabindex="1" autofocus required />
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="email@example.com" aria-describedby="email" tabindex="2" required />
                            {{-- <h5>{{ $positions }}</h5> --}}

                            {{-- <input type="text" class="form-control" id="position_id" name="position_id" placeholder=""
                                value="" aria-describedby="position_id" tabindex="2" /> --}}


                            {{-- <div class="mb-1">
                                <label class="form-label" for="position_id">Votre post</label>
                                <select class="form-select" id="position_id" title='Sélection un element de la list!'
                                    required>
                                    <option selected>Séléctionner votre post</option>
                                    <option value="1">PDG</option>
                                    <option value="2">DG</option>
                                    <option value="3">IT MANAGER</option>
                                    <option value="4">DAF</option>
                                    <option value="5">CDG</option>
                                </select>
                            </div> --}}

                            <div class="mb-1">
                                <label class="form-label" for="position_id">Votre post</label>
                                <select class="form-select" id="position_id" name="position_id"
                                    title='Sélection un element de la list!' required>
                                    <option value="">Votre post</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}" @if ($position->id == old('position')) selected @endif>
                                            {{ $position->position_title }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="mb-1">
                                <label for="password" class="form-label">Mot de passe</label>

                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" class="form-control form-control-merge" id="password"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" tabindex="3" required />
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                            <div class="  mb-1">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        required />
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                            {{-- <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                                <label class="form-check-label" for="register-privacy-policy">
                                    I agree to <a href="#">Termes & conditions d'utilisation</a>
                                </label>
                            </div>
                        </div> --}}

                            <button type="submit" class="btn btn-primary w-100" tabindex="5">S'inscrire</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>Vous êtes déja membre?</span>
                        <a href="{{ route('login') }}">
                            <span>Se connecter</span>
                        </a>
                    </p>


                </div>
            </div>
            <!-- /Register basic -->
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/auth-register.js') }}"></script>
@endsection
