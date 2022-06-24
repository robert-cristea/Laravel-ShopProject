<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="sotoya, shop, professional, particular, joinery, material, opening, range, glazing, installation, insulation, color, aeration, door, window"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon/Favicon-sotoya-32x32.ico"/>

    @yield('title')
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accessory.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=ManRegular:wght@200;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ManBold:wght@800&display=swap" rel="stylesheet"> --}}

    @yield('styles')

</head>

<body class="bg-grey h-screen antialiased leading-none" onresize="onResize()" ondragstart="return false;" ondrop="return false;">

    @include('partials.accessory')

    <div class="app-container text-primary">
        @include('layouts.header')
        @yield('content')
        @yield('footer')
    </div>

    <script src="{{ asset('js/accessory.js') }}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/layouts/header.js')}}"></script>
    @yield('scripts')


</body>

</html>