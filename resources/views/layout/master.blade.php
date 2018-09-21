<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="utf-8">
    <title>stock | Interactive Photography Template</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
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
    <link href="{{ asset('css/custom.css') }}">
</head>

@include('layout.top_menu')

    @yield('content')

    @yield('footer')

    @yield('js')

{{--<script src="{{ asset('js/template.js') }}" type="text/javascript"></script>--}}
<!-- plugin JS -->
<script src="{{ asset('plugin/pluginsstock.js') }}" type="text/javascript"></script>
<!-- stock JS -->
<script src="{{ asset('js/stock.js') }}" type="text/javascript"></script>
</body>
</html>