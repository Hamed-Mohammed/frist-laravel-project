<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Ubuntu Mono', monospace !important;
            color: white;
        }
    </style>
</head>
<body background="{{asset('img/bk2.jpg')}}" >
<div id="app">
    <nav class="navbar navbar-inverse navbar-static-top" >
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/hpage">Home</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="/hpage">Home</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/category">Category</a></li>
                        @endauth
                    @endif
                </ul>


                @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
