<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Icon -->
    <link rel="icon" href="{{ asset('images/laporin-dark.png') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('sasu/css/owl.carousel.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('sasu/css/flaticon.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light mt-2">
                        <a class="navbar-brand" href="{{ redirect('/') }}"><h2 class="text-light">{{ config('app.name') }}</h2></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->