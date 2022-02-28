@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($flat->cover)
        <div class="w-100">
            <img src="{{asset('storage/'. $flat->cover)}}" alt="{{$flat->title}}" class="w-100">
        </div>
        @endif
        <div>
            <h3>{{$flat->title}}</h3>

            <h5>Indirizzo della casa: {{$flat->address}}, {{$flat->city}}, {{$flat->province}}</h5>
            <h5>Numero di stanze: {{$flat->room_number}}</h5>
            <h5>Numero di letti: {{$flat->bathroom_number}}</h5>
            <h5>Numero di bagni: {{$flat->bed_number}}</h5>
            <h5>Metri quardi: {{$flat->square_meters}}</h5>

            

            <button class="btn btn-info ">
                <a href="{{route('host.flats.edit', $flat)}}">EDIT</a>
            </button>
            <form onsubmit="return confirm('Questa azione cancellerà definitivamente questo appartamento e tutti i sui dati. Sei sicuro di procedere?')"
            action="{{route('host.flats.destroy', $flat)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-5">
                    DELETE
                </button>
            </form>

        </div>
    </div>
    
@endsection

@section('title_page')
- Alloggio
@endsection