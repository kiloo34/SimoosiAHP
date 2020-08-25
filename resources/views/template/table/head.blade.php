<!DOCTYPE html>
<html class="no-js " lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <title>SimooSi || {{ $title }}</title>
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        @stack('css')
        @stack('style')
        <link rel="stylesheet" href="">
        <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">

    </head>

    <body class="theme-purple">
        <x-preloader />
        <div id="main-wrapper">
            <x-topbar />
            <x-sidebar />
            <div class="page-wrapper">
                <x-breadcrumb :title="$title" :subtitle="$subtitle" />
                <div class="container-fluid">
