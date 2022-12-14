<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{URL('/img/new_logo2.png')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{URL::asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{URL::asset('/vendor/jquery/jquery.min.js')}}"></script>
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
        </script>
    </head>
    <body style="background-image: URL('/img/bg.gif'); background-size: cover;">
        <div id="app" class="page-container home-page-welcome">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
