<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    @include('users.admin.layout.style')
    @yield('style')
</head>
<body>
    <div class="container-scroller">
        {{-- header goes here --}}
        @include('users.admin.layout.header')
        <div class="container-fluid page-body-wrapper">
            @include('users.admin.layout.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">

                @yield('content')
                </div>
                 @include('users.admin.layout.footer')
            </div>

        </div>
    </div>
    @include('users.admin.layout.script')
    @yield('script')
</body>
</html>
