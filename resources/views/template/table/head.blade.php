<!DOCTYPE html>
<html class="no-js " lang="en">

    <head>
        {{-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <title>SimooSi || {{ $title }}</title>
        <link href="{{ asset('assets/{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
            rel="stylesheet') }}">
        @stack('css')
        @stack('style')
        <link rel="stylesheet" href="">
        <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css"> --}}
        {{-- <link href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}"> --}}

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {{-- <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit."> --}}
        <title>SimooSi || {{ $title }}</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

        @stack('css')
        @stack('style')

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">

    </head>

    <body class="theme-purple">
        <x-preloader />
        <div class="overlay"></div>
        <x-topbar />
        <x-leftbar />
        <x-rightbar />
        <section class="content home">
            <x-breadcrumb :title="$title" :subtitle="$subtitle" />
            <div class="container-fluid">
