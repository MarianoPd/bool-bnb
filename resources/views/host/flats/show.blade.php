@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($flat->cover)
        <div>
            <img src="{{asset('storage/'. $flat->cover)}}" alt="{{$flat->title}}">
        </div>
        @endif
        <div>
            <h3>{{$flat->title}}</h3>

            <h5>Indirizzo della casa: {{$flat->address}}, {{$flat->city}}, {{$flat->province}}</h5>
            <h5>Numero di stanze: {{$flat->room_number}}</h5>

            

            <button class="btn btn-info ">
                <a href="{{route('host.flats.edit', $flat)}}">EDIT</a>
            </button>
            <form action="{{route('host.flats.destroy', $flat)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-5">
                    DELETE
                </button>
            </form>

        </div>
    </div>
    
@endsection