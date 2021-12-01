@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
$configData = Helper::applClasses();

/* $configData = [
    // 'mainLayoutType' => 'vertical', // Options[String]: vertical(default), horizontal
    // 'theme' => 'light', // options[String]: 'light'(default), 'dark', 'bordered', 'semi-dark'
    // 'sidebarCollapsed' => false, // options[Boolean]: true, false(default) (warning:this option only applies to the vertical theme.)
    // 'navbarColor' => '', // options[String]: bg-primary, bg-info, bg-warning, bg-success, bg-danger, bg-dark (default: '' for #fff)
    // 'horizontalMenuType' => 'floating', // options[String]: floating(default) / static /sticky (Warning:this option only applies to the Horizontal theme.)
    // 'verticalMenuNavbarType' => 'floating', // options[String]: floating(default) / static / sticky / hidden (Warning:this option only applies to the vertical theme)
    // 'footerType' => 'static', // options[String]: static(default) / sticky / hidden
    // 'layoutWidth' => 'full', // options[String]: boxed(default) / full,
    // 'showMenu' => false, // options[Boolean]: true(default), false //show / hide main menu (Warning: if set to false it will hide the main menu)
  
    // 'bodyClass' => '', // add custom class
    // 'pageHeader' => true, // options[Boolean]: true(default), false (Page Header for Breadcrumbs)
    // 'contentLayout' => 'default', // options[String]: default, content-left-sidebar, content-right-sidebar, content-detached-left-sidebar, content-detached-right-sidebar (warning:use this option if your whole project with sidenav Otherwise override this option as page level )
    // 'defaultLanguage' => 'fr',    //en(default)/de/pt/fr here are four optional language provided in theme
    // 'blankPage' => false, // options[Boolean]: true, false(default) (warning:only make true if your whole project without navabr and sidebar otherwise override option page wise)
    // 'direction' => env('MIX_CONTENT_DIRECTION', 'ltr'), // Options[String]: ltr(default), rtl

    'layoutWidth' => 'boxed',
    'defaultLanguage' => 'fr',
    'showMenu' => false,
    'theme' => 'dark',
]; */

@endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
    lang="@if (session()->has('locale')){{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
    @if ($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=" Groupe Hôtellerie, Tourisme et Thermalisme">
    <meta name="keywords" content=" Groupe Hôtellerie, Tourisme et Thermalisme">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title') - Groupe HTT - Groupe Hôtellerie, Tourisme et Thermalisme</title>
    <link rel="apple-touch-icon" href="{{ asset('images/ico/apple-icon-120.png') }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.jpg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@isset($configData['mainLayoutType'])
    @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalLayoutMaster' :
    'layouts.verticalLayoutMaster' ))
@endisset
