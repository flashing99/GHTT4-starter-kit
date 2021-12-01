@extends('layouts/contentLayoutMaster')

@section('title', 'Accueil')

@section('content')

    {{-- @if (auth()->user()->is_admin == 1)
       
        @include('admin/index')

         
    @else

        @include('filiales/index')

    @endif --}}

    <h1>Home Main Page :Bienvenue User Manager</h1>
@endsection
