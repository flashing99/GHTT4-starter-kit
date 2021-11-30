@extends('layouts/contentLayoutMaster')

@section('title', 'Accueil')

@section('content')
    <!-- Kick start -->
    @if (auth()->user()->role == 1)
        @include('admin/index')
    @endif

    {{-- ----------- --}}
    @if (auth()->user()->role == 2)
        @include('filiales/index')
    @endif

    <!--/ Page layout -->

    <h1>Home user</h1>
@endsection
