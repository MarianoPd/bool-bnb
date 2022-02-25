@extends('layouts.app')

@section('content')
    <div class="container">
        
        @if ($flats)
            <h1>I tuoi appartamenti</h1>
        @else
            <h1>Non hai registrato ancora nessun appartamento</h1>   
        @endif


        @foreach ($flats as $flat)
            <div class="border-black">
                <h3></h3>
                <h5>Indirizzo della casa: </h5>
                <h5>Numero di stanze: {{$flat->room_number}}</h5>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$flat->title}}</h5>
                    <p class="card-text">{{$flat->address}}, {{$flat->city}}, {{$flat->province}}</p>
                    {{-- c'è da aggiungere link allo show del singolo flat --}}
                    <a href="#" class="btn btn-primary">More info</a>
                </div>
              </div>
        @endforeach
    </div>
    
@endsection