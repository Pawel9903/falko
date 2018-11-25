<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="@yield('desc')" name="description">
    <meta content="Łukasz Falkiewicz" name="author">
    <meta content="fotografia, sesje ślubne,portret, portfolio, galeria, fotograf, zdjęcia, profesjonalny, sesje , ślub, sport, aparat, falkiewicz, łukasz, lukasz, trójmiasto" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
    <link href="{{ asset('img/favicon1.png') }}" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!-- stock CSS -->
    <link href="{{ asset('css/animated-stock.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css')  }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stock-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/queries-stock.css') }}" media="all" rel="stylesheet" type="text/css">
    {{--<link href="{{ asset('css/template.css') }}">--}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

    <meta name="google-site-verification" content="TXt4wNODpiA_J-XNRD5bYj_skuIrKn5w5Rpoj0JuPxk" />
</head>