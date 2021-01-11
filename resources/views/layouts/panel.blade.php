<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <!-- CSS files -->
    <link href="{{ asset('panel/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/demo.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css"/>
    @yield('css')
</head>

<body class="antialiased">
<div class="page">
@include('include._header')

    <div class="content">
        <div class="container-xl">
    @yield('body')
        </div>
    </div>

@include('include._footer')
</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('panel/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('panel/js/tabler.min.js') }}"></script>
    @yield('js')
</body>
</html>
