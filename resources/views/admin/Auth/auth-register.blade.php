@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('vendor-style')
    <!-- vendor css files -->
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

                    <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST"
                        autocomplete="off">
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        {{-- +++++++++++++++++++ --}}
                        @csrf
                        {{-- +++++++++++++++++++ --}}

                        <div class="mb-1">
                            <label for="nom" class="form-label">Votre nom</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" class="form-control  @error('nom') is-invalid @enderror" id="nom"
                                    name="nom" placeholder="Votre nom" aria-describedby="nom" autocomplete="false"
                                    tabindex="1" autofocus value="{{ old('nom') }}" />
                            </div>
                            @error('nom')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>

                        {{-- +++++++++++++++++++ --}}
                        <div class="mb-1">
                            <label for="email" class="form-label">Votre email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror " id="email"
                                    name="email" placeholder="Votre email" aria-describedby="email" tabindex="2" autofocus
                                    value="{{ old('email') }}" />
                            </div>
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        {{-- +++++++++++++++++++ --}}


                        {{-- <div class="mb-1">
                                <label class="form-label" for="position_id">Votre post</label>
                                <select class="form-select @error('position') is-invalid @enderror" id="position_id" title='Sélection un element de la list!'
                                required>
                                <option selected>Séléctionner votre post</option>
                                <option value="1">PDG</option>
                                <option value="2">DG</option>
                                <option value="3">IT MANAGER</option>
                                <option value="4">DAF</option>
                                <option value="5">CDG</option>
                            </select> --}}


                        {{-- +++++++++++++++++++ --}}
                        {{-- subsidiaries * filiales --}}
                        <div class="mb-1">
                            <label class="form-label" for="filiale">Séléctionner la filale</label>
                            <select class="hide-search form-select  @error('filiale') is-invalid @enderror"
                                id="select2-hide-search1" name="filiale">

                                <option disabled selected value>Séléctionner </option>
                                @foreach ($filiales as $filiale)
                                    <option value="{{ $filiale->id }}"
                                        {{ old('filiale') == $filiale->id ? 'selected=selected' : '' }}>
                                        {{ $filiale->filiale_name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('filiale')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>
                        {{-- +++++++++++++++++++ --}}
                        <div class="mb-1">
                            <label class="form-label" for="position">Séléctionner le post</label>
                            <select class="hide-search form-select  @error('position') is-invalid @enderror"
                                id="select2-hide-search" name="position">

                                <option disabled selected value>Séléctionner </option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        {{ old('filiale') == $position->id ? 'selected=selected' : '' }}>
                                        {{ $position->position_title }}
                                    </option>
                                @endforeach

                            </select>
                            @error('position')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror

                        </div>


                        {{-- positions * Postes --}}
                        {{-- <div class="mb-1">
                            <label class="form-label" for="position">Séléctionner le poste </label>
                            <select class="form-select form-select-md @error('position') is-invalid @enderror"
                                id="position">
                                <option selected>Séléctionner</option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        {{ old('position') == $position->id ? 'selected=selected' : '' }}>
                                        {{ $position->position_title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('position')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div> --}}
                        {{-- +++++++++++++++++++ --}}
                        <div class="mb-1">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password"
                                    class="form-control form-control-merge @error('password') is-invalid @enderror"
                                    id="password" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" tabindex="4" value="{{ old('password') }}" />
                                <span class="input-group-text cursor-pointer">
                                    <i data-feather="eye"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        {{-- +++++++++++++++++++ --}}
                        <div class="  mb-1">
                            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    {{-- placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" --}} tabindex="5" />
                                <span class="input-group-text cursor-pointer">
                                    <i data-feather="eye"></i>
                                </span>
                                @error('password_confirmation')
                                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                @enderror
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
                        {{-- +++++++++++++++++++ --}}

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
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection

{{-- @section('vendor-script')
    <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/js/forms/validation/localization/message_fr.js') }}"></script>

@endsection
@section('page-script')
    <script src="{{ asset('js/scripts/pages/auth-register.js') }}"></script>
@endsection

@section('scripts')
    <script type="text/javascript">
       $(document).ready(function() {

                                    $.validator.addMethod(
                                        "valueNotEquals",
                                        function(value, element, arg) {
                                            return arg != value;
                                        },
                                        "Value must not equal arg."
                                    );

                                    $(".auth-register-form").validate({
                                        rules: {
                                            "position-id": {
                                                required: true,
                                                valueNotEquals: "default",
                                            },
                                        },
                                        messages: {
                                            'position-id': {
                                                valueNotEquals:
                                                    : "Veuillez séléctionner un element de la list!",


                                            },
                                        },
                                    });
                                });  
    </script>
@endsection --}}
