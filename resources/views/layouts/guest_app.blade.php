<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoolBnb @yield('title_page')</title>
    <link rel="stylesheet" href="{{asset('css/guest/style.css')}}">

    {{-- tomtom --}}
    <link href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css' rel='stylesheet' type='text/css'>
    <style>
        body, html { margin: 0; padding: 0; }
        #map-div { width: 100%; height: 100%; }
    </style>

</head>
<body>
    @yield('guest_content')
</body>
</html>