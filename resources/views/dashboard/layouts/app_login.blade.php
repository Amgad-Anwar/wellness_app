<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- loader-->
{{--    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />--}}
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />--}}
    <!-- Icons CSS -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />--}}
    <!-- App CSS -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />--}}
    <!-- Scripts -->
    @vite(['resources/sass/dashboard_login_app.scss', 'resources/js/dashboard_login_app.js'])
</head>
<body class="@yield('bodyClass')">
    <div id="app">
        @yield('content')
    </div>
    @vite(['resources/js/dashboard_login_app_footer.js'])
</body>
</html>
