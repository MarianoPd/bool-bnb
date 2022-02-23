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
    <header class="container-fluid">
        <div class="row">
            <div class="col bg-success">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
    </header>
    @yield('guest_content')
</body>
</html>

