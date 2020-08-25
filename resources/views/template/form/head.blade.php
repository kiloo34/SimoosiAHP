<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>SIM || {{ $title }}</title>
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        @stack('css')
        @stack('style')
        <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/colors/blue.css') }}" id="theme" rel="stylesheet">

    </head>

    <body class="fix-header card-no-border">
        <x-preloader />
        <div id="main-wrapper">
            <x-topbar />
            <x-sidebar />
            <div class="page-wrapper">
                <x-breadcrumb :title="$title" :subtitle="$subtitle" />
                <div class="container-fluid">
