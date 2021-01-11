<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.17
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('panel/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('panel/css/demo.min.css') }}" rel="stylesheet"/>
</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
<div class="flex-fill d-flex flex-column justify-content-center py-4">
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <a href="#"><img src="{{ asset('panel/logo.svg') }}" height="36" alt=""></a>
        </div>
@yield('body')
    </div>
</div>
<!-- Libs JS -->
<script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Tabler Core -->
<script src="{{ asset('panel/js/tabler.min.js') }}"></script>
</body>
</html>
