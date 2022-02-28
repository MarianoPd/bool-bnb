<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolBnb @yield('title_page')</title>
    <link rel="stylesheet" href="{{asset('css/guest/style.css')}}">
</head>
<body>
    <header class="container-fluid d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between align-items-baseline">
                <div class="logo d-flex justify-content-center align-items-center">
                    <a href="#">
                        <span>BoolBnB</span>
                    </a>
                </div>
                <div class="d-flex">
                    <a class="{{ Route::currentRouteNamed('')? 'active' : '' }}"  href="http://127.0.0.1:8000/">
                        <h6 class="active">Home</h6>
                    </a>
                    <a class="{{ Route::currentRouteNamed('')? 'active' : '' }} mx-5"  href="http://127.0.0.1:8000/appartamenti">
                        <h6>Flats</h6>
                    </a>
                    <a class="{{ Route::currentRouteNamed('')? 'active' : '' }}"  href="http://127.0.0.1:8000/chi-siamo">
                        <h6>About</h6>
                    </a>
                </div>
                <div>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/host') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Accedi</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrati</a>
                            @endif   
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    @yield('guest_content')
</body>
</html>

