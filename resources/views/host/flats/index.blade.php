@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>I tuoi appartamenti</h1>

        @foreach ($flats as $flat)
            <div>
                <h3>{{$flat->title}}</h3>
                <h5>indirizzo{{$flat->address}}</h5>
                <h5>città{{$flat->city}}</h5>
                <h5>provincia{{$flat->province}}</h5>
                <h5>numero di stanze: {{$flat->room_number}}</h5>
            </div>
        @endforeach
    </div>
    
@endsection