@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>{{$flat->title}}</h3>
            <h5>indirizzo: {{$flat->address}}</h5>
            <h5>città: {{$flat->city}}</h5>
            <h5>provincia: {{$flat->province}}</h5>
            <h5>numero di stanze: {{$flat->room_number}}</h5>

            <button>CIAOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</button>
        </div>
    </div>
    
@endsection