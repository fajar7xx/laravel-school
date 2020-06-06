<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('sekolah.title') }}</title>
    <meta name="description" content="Laravel School">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    
    {{-- alt fotawesome5 --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend') }}/css/all.min.css"> --}}
    
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

    @yield('css')
</head>

<body>