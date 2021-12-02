@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice Preview')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/app-invoice.css') }}">
@endsection

@section('style')

    <style>
        .invoice-preview .invoice-date-wrapper .invoice-date-title,
        .invoice-edit .invoice-date-wrapper .invoice-date-title,
        .invoice-add .invoice-date-wrapper .invoice-date-title {
            width: 9rem;
            margin-bottom: 0;
        }

        .table:not(.table-dark):not(.table-light) thead:not(.table-dark) th,
        .table:not(.table-dark):not(.table-light) tfoot:not(.table-dark) th {
            background-color: #f3f2f7;
            /*   background-color: #0072d7;                                                                                                                                                                                                                                            color: #fff; */
        }

        .table:not(.table-dark):not(.table-light) thead:not(.table-dark) th.merged,
        .table:not(.table-dark):not(.table-light) tfoot:not(.table-dark) th.merged {

            background-color: #e4e7ed;
            /* background-color: #d2d6dd; */
            color: #00172c;

            /* background-color: #f3f2f7; */
            /*   background-color: #015bab;                                              
                                                                                                                                                                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                                                                                                                                                                    .table:not(.table-dark):not(.table-light) thead:not(.table-dark) th.merged-all,
                                                                                                                                                                                                                                                                                                                                                                                    .table:not(.table-dark):not(.table-light) tfoot:not(.table-dark) th.merged-all {


                                                                                                                                                                                                                                                                                                                                                                                        background-color: #edecf1;
                                                                                                                                                                                                                                                                                                                                                                                        color: #00172c;
                                                                                                                                                                                                                                                                                                                                                                                        /* background-color: #f3f2f7; */
            /* background-color: #015bab;                                                                                                                                                                                               color: #00172c; */
        }

    </style>

@endsection

@section('content')

    {{-- {{ dd($agr_items) }} --}}

    <section class="invoice-preview-wrapper pb-0">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="card invoice-preview-card p-2">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                                <div class="logo-wrapper">

                                    <div class="profile-image-wrapper">
                                        <div class="profile-image">
                                            <div class="avatar">
                                                <img src="{{ asset('images/logo/filiales/mazafran.png') }}"
                                                    alt="Filiale Picture">
                                            </div>
                                        </div>
                                    </div>


                                    <h3 class="text-primary invoice-logo">EGT CENTER</h3>
                                </div>


                                <p class="card-text mb-25">Site Sider, Paradou, Hydra, Alger</p>
                                <p class="card-text mb-25">contact@groupe-htt.dz</p>
                                <p class="card-text mb-0">+213 (0) 23 53 42 09 | +213 (0) 23 53 41 68 </p>
                            </div>
                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    Canvas
                                    <span class="invoice-number">#3492</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Date de début:</p>
                                    <p class="invoice-date">20/10/2021</p>
                                </div>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title"> Date de fin:</p>
                                    <p class="invoice-date">05/11/2021</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>


                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    {{-- <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                            <div class="col-xl-8 p-0">
                                <h6 class="mb-2">Invoice To:</h6>
                                <h6 class="mb-25">Thomas shelby</h6>
                                <p class="card-text mb-25">Shelby Company Limited</p>
                                <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>
                                <p class="card-text mb-25">718-986-6062</p>
                                <p class="card-text mb-0">peakyFBlinders@gmail.com</p>
                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">Payment Details:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-1">Total Due:</td>
                                            <td><span class="fw-bold">$12,110.55</span></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Bank name:</td>
                                            <td>American Bank</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Country:</td>
                                            <td>United States</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">IBAN:</td>
                                            <td>ETD95476213874685</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">SWIFT code:</td>
                                            <td>BR91905</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Address and Contact ends -->


                    {{-- <div class="invoice-spacing"></div> --}}
                    <form method="POST" action="" id="firstForm-2">
                        @csrf

                        <table class="table-responsive table table-striped table-row-bordered border rounded w-100"
                            id="table-1">

                            <thead>
                                <tr class="fw-bolder fs-7 text-gray-800 px-7">
                                    <th rowspan="2"
                                        class="align-middle text-center border-bottom border-end w-200px card-text fw-bold    ">
                                        Decription -Agrégats </th>
                                    <th rowspan="2" class="align-middle text-center border merged-all">Comptes SCF
                                    </th>
                                    <th colspan="2" class=" align-middle text-center  border  merged">Mois</th>
                                    <th colspan="2" class=" align-middle text-center border merged">Evolution
                                    </th>
                                    <th rowspan="2" class=" align-middle text-center  border merged-all">Réctification
                                    </th>
                                </tr>
                                <tr class="fw-bolder fs-7 text-gray-800 px-7">
                                    <th class=" text-center  text-primary">DECEMBRE<br>2020</th>
                                    <th class=" text-center text-primary ">DECEMBRE<br>2021</th>
                                    <th class=" text-center ">Val</th>
                                    <th class=" text-center ">%</th>

                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($agr_items as $key => $value)

                                    @if ($value->ag_groups_id != 6)


                                        <tr class='text-center'>
                                            <td class="py-1 ">
                                                <p class="card-text fw-bold  font-medium-2 mb-25">{{ $value->item_name }}
                                                </p>
                                                {{-- <p class="card-text text-nowrap">
                                    Description de l'agrégat
                                </p> --}}
                                            </td>
                                            <td class="_py-1 fw-bold">
                                                <span class="fw-bold font-medium-2">{{ $value->compte_scf }}</span>
                                            </td>
                                            <td class="  fw-bold">
                                                <span class="fw-bold font-medium-2">18.634</span>
                                            </td>
                                            <td class="  fw-bold">
                                                <span class="fw-bold font-medium-2">
                                                    <input type="number" class="form-control" value="" placeholder="0"
                                                        name='' id='{{ $value->id }}'>
                                                </span>
                                            </td>
                                            <td class=" fw-bold">
                                                <span class="text-success font-medium-2 _me-25"> -3 451 </span>
                                            </td>
                                            <td class=" fw-bold">
                                                <span class="text-danger font-medium-2 ">-19%</span>
                                            </td>
                                            <td class=" fw-bold">
                                                <div class="btn btn-primary">
                                                    <span>Réctification</span>

                                                </div>
                                            </td>


                                        </tr>
                                    @endif

                                @endforeach



                            </tbody>
                        </table>


                        {{--  --}}

                        <div class="invoice-spacing"></div>


                        <table class="table-responsive mt-4 table table-striped table-row-bordered border rounded w-100"
                            id="table-1">

                            <thead>
                                <tr class="fw-bolder fs-7 text-gray-800 px-7">
                                    <th rowspan="2"
                                        class="align-middle text-center border-bottom border-end w-200px card-text fw-bold    ">
                                        Decription -Agrégats </th>
                                    <th rowspan="2" class="align-middle text-center border merged-all">Comptes SCF
                                    </th>
                                    <th colspan="2" class=" align-middle text-center  border  merged">Mois</th>
                                    <th colspan="2" class=" align-middle text-center border merged">Evolution
                                    </th>
                                    <th rowspan="2" class=" align-middle text-center  border merged-all">Réctification
                                    </th>
                                </tr>
                                <tr class="fw-bolder fs-7 text-gray-800 px-7">
                                    <th class=" text-center ">NOVEMBRE <br>2021</th>
                                    <th class=" text-center ">DECEMBRE<br>2021</th>
                                    <th class=" text-center ">Val</th>
                                    <th class=" text-center ">%</th>

                                </tr>
                            </thead>




                            <tbody>

                                @foreach ($agr_items as $key => $value)

                                    @if ($value->ag_groups_id >= 6)


                                        <tr class='text-center'>
                                            <td class="py-1 ">
                                                <p class="card-text fw-bold  font-medium-2 mb-25">{{ $value->item_name }}
                                                </p>
                                                {{-- <p class="card-text text-nowrap">
                                    Description de l'agrégat
                                </p> --}}
                                            </td>
                                            <td class="_py-1 fw-bold">
                                                <span class="fw-bold font-medium-2">{{ $value->compte_scf }}</span>
                                            </td>
                                            <td class="  fw-bold">
                                                <span class="fw-bold font-medium-2">18.634</span>
                                            </td>
                                            <td class="  fw-bold">
                                                <span class="fw-bold font-medium-2">
                                                    <input type="number" class="form-control" value="" placeholder="0"
                                                        name='' id='{{ $value->id }}'>
                                                </span>
                                            </td>
                                            <td class=" fw-bold">
                                                <span class="text-success font-medium-2 _me-25"> -3 451 </span>
                                            </td>
                                            <td class=" fw-bold">
                                                <span class="text-danger font-medium-2 ">-19%</span>
                                            </td>
                                            <td class=" fw-bold">
                                                <div class="btn btn-primary">
                                                    <span>Réctification</span>

                                                </div>
                                            </td>


                                        </tr>
                                    @endif

                                @endforeach



                            </tbody>
                        </table>






                        {{--  --}}

                        <div class="invoice-spacing"></div>

                        <div class="col-xl-12 col-md-12 col-12 text-center invoice-actions mt-md-0 mt-2">
                            <div class="card ">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                                        data-bs-target="#send-invoice-sidebar">
                                        Sauvegarder
                                    </button>
                                    <button class="btn btn-success w-100" data-bs-toggle="modal"
                                        data-bs-target="#add-payment-sidebar">
                                        Valider
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form>


                    <div class="invoice-spacing"></div>


                    <!-- Invoice Description starts -->
                    {{-- <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="py-1">Agrégats - description</th>
                                    <th class="py-1">Comptes SCF</th>
                                    <th class="py-1">Hours</th>
                                    <th class="py-1">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <p class="card-text fw-bold mb-25">Native App Development</p>
                                        <p class="card-text text-nowrap">
                                            Developed a full stack native app using React Native, Bootstrap & Python
                                        </p>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">$60.00</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">30</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">$1,800.00</span>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-1">
                                        <p class="card-text fw-bold mb-25">Ui Kit Design</p>
                                        <p class="card-text text-nowrap">Designed a UI kit for native app using Sketch,
                                            Figma & Adobe XD</p>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">$60.00</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">20</span>
                                    </td>
                                    <td class="py-1">
                                        <span class="fw-bold">$1200.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body invoice-padding pb-0">
                        <div class="row invoice-sales-total-wrapper">
                            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                <p class="card-text mb-0">
                                    <span class="fw-bold">Salesperson:</span> <span class="ms-75">Alfie
                                        Solomons</span>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                <div class="invoice-total-wrapper">
                                    <div class="invoice-total-item">
                                        <p class="invoice-total-title">Subtotal:</p>
                                        <p class="invoice-total-amount">$1800</p>
                                    </div>
                                    <div class="invoice-total-item">
                                        <p class="invoice-total-title">Discount:</p>
                                        <p class="invoice-total-amount">$28</p>
                                    </div>
                                    <div class="invoice-total-item">
                                        <p class="invoice-total-title">Tax:</p>
                                        <p class="invoice-total-amount">21%</p>
                                    </div>
                                    <hr class="my-50" />
                                    <div class="invoice-total-item">
                                        <p class="invoice-total-title">Total:</p>
                                        <p class="invoice-total-amount">$1690</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Description ends -->

                    <hr class="invoice-spacing" />

                    <!-- Invoice Note starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row">
                            <div class="col-12">
                                <span class="fw-bold">Note:</span>
                                <span>It was a pleasure working with you and your team. We hope you will keep us in mind for
                                    future freelance
                                    projects. Thank You!</span>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Note ends -->
                </div>
            </div> --}}



                    <!-- /Invoice -->

                    <!-- Invoice Actions -->
                    {{-- <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                            data-bs-target="#send-invoice-sidebar">
                            Send Invoice
                        </button>
                        <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('app/invoice/print') }}"
                            target="_blank"> Print </a>
                        <a class="btn btn-outline-secondary w-100 mb-75" href="{{ url('app/invoice/edit') }}"> Edit </a>
                        <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                            Add Payment
                        </button>
                    </div>
                </div>
            </div> --}}
                    <!-- /Invoice Actions -->
                </div>
    </section>



@endsection

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('js/scripts/pages/app-invoice.js') }}"></script>



    <script type="text/javascript" language="javascript">
        var SITEURL = '{{ URL::to('') }}';

        $(document).ready(function() {

            $("#table-1").each(function() {



                console.log($(this).children())


                var v = $(this).children().children('input').val();
                $(this).children().children('.value').html(v);

                // $('input').change(function() {
                //     var cur = $('input').val();
                //     $(this).attr('value', cur);
                //     $('.value').html(cur);
                // });


                /*   $('.value').html($('#gauge').val());
                  $('input').change(function(){
                      var cur = $('input').val();
                      $(this).attr('value', cur );
                      $('.value').html(cur);
                  }); */

            });

        });
    </script>
@endsection

{{-- @section('script')

@endsection --}}
