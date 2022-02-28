@extends('layouts.app')

@section('content')
    <div class="container">
        
        @if (empty($flats))
            <h1>I tuoi appartamenti</h1>
        @else
            <h1>Non hai registrato ancora nessun appartamento</h1>   
        @endif


        @foreach ($flats as $flat)
            <div class="card mb-3" style="width: 18rem;">

                @if ($flat->cover)
                    <div class="image p-3">
                        <img width="100%"
                        src="{{ asset('storage/' . $flat->cover) }}" alt="Nessuna immagine disponibile">
                    </div>
                @else 
                    {{-- <div class="image p-3">
                        <img width="100%"
                        src="{{ asset('storage/' . "placeholder.webp" ) }}" alt="">
                    </div> --}}
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{$flat->title}}</h5>
                    <p class="card-text">{{$flat->address}}, {{$flat->city}}, {{$flat->province}}</p>
                    {{-- c'è da aggiungere link allo show del singolo flat --}}

                    <a href="{{ route('host.flats.show', $flat) }}" class="btn btn-primary">More info</a>

                </div>
              </div>
        @endforeach
    </div>
    
@endsection