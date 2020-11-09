<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shop A-Z') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('css/backend/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/util.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/select2.min.css') }}">
    <script src="{{ asset('js/backend/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/backend/select2.min.js') }}"></script>
    <script src="{{ asset('js/backend/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('js/backend/bootstrap.min.js') }}"></script>
    <script src="https://colorlib.com/etc/lf/Login_v1/vendor/bootstrap/js/popper.js"></script>

    <script src="{{ asset('js/backend/main.js') }}"></script>

</head>

<body>

    @yield('content')

    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>