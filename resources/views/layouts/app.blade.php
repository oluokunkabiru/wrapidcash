<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ appSettings()->name }} @yield('title')</title>

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}
    @include('layouts.style')

    @yield('style')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  --}}

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap"  id="home-section">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>
    @include('layouts.script')
    @yield('script')

</body>

</body>
</html>
