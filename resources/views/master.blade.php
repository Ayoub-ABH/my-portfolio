<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <title>Ayoub AIT BABA HAMOU</title>

    </head>
    <body>
        <div class="app">
                <div class="header">
                    @include('layouts.navbar')
                </div>

                <div class="container">

                    <div class="responsive-header">

                        <div class="head-profile">
                            <div class="head-img">
                                <img src="{{asset("storage/profile.jpg")}}" alt="head profile">
                            </div>

                            <div class="head-name">
                                Ayoub AIT BABA HAMOU
                            </div>
                        </div>

                        <div class="responsive-button">
                            <span onclick="showMenu()" class="menu-btn"><i class="fa-solid fa-list"></i></span>
                        </div>
                    </div>

                    <div class="content">
                        @yield('content')
                    </div>

                </div>



        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
