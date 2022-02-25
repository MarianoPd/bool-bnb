<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolBnb</title>
    <link rel="stylesheet" href="{{asset('css/guest/style.css')}}">
</head>
<body>
    <header class="container-fluid d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between align-items-baseline">
                <div class="logo">
                    <a href="#">
                        <img src="https://starpng.com/public/uploads/preview/airbnb-logo-airbnb-logo-white-on-black-png-image-transparent-101576586899a2xgsawyyh.png" alt="">
                    </a>
                </div>
                <div class="d-flex">
                    <a href="#">
                        <h6>Alloggi</h6>
                    </a>
                    <a class="mx-5" href="#">
                        <h6>Esperienze</h6>
                    </a>
                    <a href="#">
                        <h6>Esperienze online</h6>
                    </a>
                    
                </div>
                <div>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/host') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
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

