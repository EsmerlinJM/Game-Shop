<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="shortcut icon" type="image/png" href="{{ secure_asset('favicon.ico') }}"/>
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' 
    rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.default.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">

    <script src="{{ secure_asset('js/respond.min.js') }}"></script>
    @yield('styles')
</head>
<body>
    @include('partials.header')

    <div id="all">
        <div id="content">
            @yield('content')
        </div>
    </div>
    @include('partials.footer')
    
    <script src="{{ secure_asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ secure_asset('js/waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('js/modernizr.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('js/front.js') }}"></script>
    @yield('scripts')
</body>
</html>