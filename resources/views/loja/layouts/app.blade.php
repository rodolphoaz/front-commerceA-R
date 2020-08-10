<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="./manifest.json">
    <title>A&R - {{ $title }}</title>

    <!-- Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/styles.css')}}"> --}}
    <!-- Styles -->
    </head>
<body>
  @include('loja.layouts.components.header')
    <div class="app">
        @yield('content')
    </div>
  @include('loja.layouts.components.footer')
</body>
</html>
