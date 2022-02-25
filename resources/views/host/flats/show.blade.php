@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>{{$flat->title}}</h3>

            <h5>Indirizzo della casa: {{$flat->address}}, {{$flat->city}}, {{$flat->province}}</h5>
            <h5>Numero di stanze: {{$flat->room_number}}</h5>

        </div>
    </div>
    
@endsection