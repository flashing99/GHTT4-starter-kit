@extends('layouts/contentLayoutMaster')

@section('title', 'Information Générales')



@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
@endsection


@section('style')
    <style>
        /* .shadow {} */

    </style>
@endsection

{{-- --------------------------- START PAGE -------------------------------- --}}

@section('content')



    <section id="card-style-variation">
        {{-- <h4 class="mt-3 mb-2">Rapport de revenus</h4> --}}
        <!-- Rapport de revenus / Revnue repport -->

        <div class="row match-height">
            <!-- Revenue Report Card -->
            <div class="col-lg-6 col-12">
                <div class="card card-revenue-budget">
                    <div class="row mx-0">
                        {{--  --}}
                        <div class="col-xl-12 col-md-12 col-12 revenue-report-wrapper">
                            <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>

                                <div class="d-flex align-items-center">

                                    <div class="d-flex align-items-center me-2">
                                        <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                        <span>Gains</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                        <span>Dépenses(charges)</span>
                                    </div>

                                    <div class="d-flex align-items-center ms-2">
                                        <button type="button"
                                            class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            2020
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">2020</a>
                                            <a class="dropdown-item" href="#">2019</a>
                                            <a class="dropdown-item" href="#">2018</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{--  --}}
                            <div id="revenue-report-chart" class="me-2"></div>
                            {{--  --}}
                        </div>
                    </div>


                </div>
            </div>

            {{--  --}}
            <!-- Statistics Card -->
            <div class="col-xl-6 col-md-6 col-12">
                <div class="card card-statistics">

                    <div class="card-header">
                        <h4 class="card-title">Statistiques</h4>
                        <div class="d-flex align-items-center">
                            <p class="card-text font-small-2 me-25 mb-0">Mis à jour il y a 1 mois</p>
                        </div>
                    </div>

                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-2">
                                        <div class="avatar-content">
                                            <i data-feather="trending-up" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">230k</h4>
                                        <p class="card-text font-small-3 mb-0">Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">8.549k</h4>
                                        <p class="card-text font-small-3 mb-0">Customers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather="box" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">1.423k</h4>
                                        <p class="card-text font-small-3 mb-0">Products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-success me-2">
                                        <div class="avatar-content">
                                            <i data-feather="dollar-sign" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">$9745</h4>
                                        <p class="card-text font-small-3 mb-0">Revenue</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--/ Select box Filiales -->
                        <div class="row">
                            <div class=" text-center col-xl-12 col-sm-12 col-12 my-2 my-4 ">

                                <form id="search" role="form" method="POST" action="{{ url('/') }}"
                                    class="form-inline">
                                    @csrf
                                    {{ method_field('POST') }}

                                    <div class="mb-1">
                                        <label class="form-label" for="filiale">Séléctionner la filale</label>
                                        <select
                                            class="hide-search  outline-primary form-select  @error('filiale') is-invalid @enderror"
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
                                </form>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!--/ Statistics Card -->








            {{--  --}}

        </div>








        <!-- Détails data EGT -->
        <div class="row">

            {{-- @php
                
                $rand = [];
                for ($i = 0; $i < 17; $i++) {
                    $n = rand(0, 1);
                    $rand[$i] = $n;
                }
                
                //  ------
                
                print_r($rand);     
                
            @endphp --}}

            {{-- @php(issetl($r))? $r =10 : $r=100; print_r($r);
            @endphp --}}






            @foreach ($filiales as $key => $value)

                @php
                    
                    $array = [1, 0];
                    $rand = Arr::random($array);
                    isset($r) ? ($r = $r + $rand) : ($r = 0);
                    
                @endphp
                {{-- $status = $data[$key] --}}
                {{-- {{ $status = $data[$key] ?? false }} --}}

                {{-- {{ $filiales }} --}}


                <div class="col-md-4 col-xl-2">

                    {{--  --}}
                    <div class="card    {{ $rand == 1 ? 'border-success' : 'border-danger' }}">
                        <div class="card-body text-center">

                            <div class="d-flex justify-content-end w-100 ">
                                <div
                                    class="avatar _bg-light-success 
                                     {{ $rand == 1 ? 'bg-success' : 'bg-danger' }}  p-50 m-0 ">
                                    <div class="avatar-content">
                                        <i data-feather="check" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <div class="avatar">
                                        <img src="{{ asset('images/logo/filiales/mazafran.png') }}"
                                            alt="Filiale Picture">
                                    </div>
                                </div>
                            </div>

                            <h4 class="card-title">
                                {{ $value->filiale_name }}

                                {{-- </h4> {{ $rand }} </h4> --}}
                                {{-- <p class="card-text">Date de validation : 21-01-2021</p> --}}
                                <hr class="mb-2">

                                <div class="d-flex flex-row meetings align-start center text-left align-items-center">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-calendar avatar-icon font-medium-3">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0"><small>04 Decembre </small> </h6>

                                    </div>
                                </div>
                                <hr class="mb-2">
                                {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted fw-bolder">Gadres Dirigants</h6>
                                        <h3 class="mb-0">10.3k</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Employés</h6>
                                        <h3 class="mb-0">156</h3>
                                    </div>

                                </div> --}}

                                <div class="d-grid col-12">
                                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light">
                                        Voir les détails
                                    </button>
                                </div>
                        </div>
                    </div>

                </div>
                {{--  --}}
            @endforeach

        </div>


        <div class="invoice-spacing"></div>

        <div class="col-xl-12 col-md-12 col-12 text-center invoice-actions mt-md-0 mt-2">
            <div class="card ">
                <div class="card-body">
                    <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                        data-bs-target="#send-invoice-sidebar">
                        Rafraicher
                    </button>
                    <div class="invoice-spacing"></div>

                    <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                        Télécharger le consolidé
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!--/ Card layout -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/cards/card-analytics.js')) }}"></script>
@endsection
