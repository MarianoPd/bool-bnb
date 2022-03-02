@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="t2-card">
            <div class="card-header">
                {{-- <h2>Ciao {{Auth::user()->email}}</h2> --}}
                <h1>Aggiungi Appartamento</h1>

            </div>
            <div class="card-body">

                <form action="{{route('host.flats.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- titolo appartamento --}}
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input name="title" id="title" type="text" min="3" max="100"
                            class="t2-form-control @error('title') is-invalid @enderror" 
                            value="{{old('title')}}"
                            id="title"  name="title" placeholder="Descrivi l'appartamento...">
                        @error('title')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
        
                    {{-- indirizzo --}}
                    <div class="row">
                        {{-- città appartamento --}}
                        <div class="form-group col-12 col-sm-4">
                            <label for="city">Città</label>
                            <input type="text" 
                                  class="t2-form-control @error('city') is-invalid @enderror" 
                                  value="{{old('city')}}" style="text-transform:capitalize"
                                  id="city"  name="city" placeholder="Inserisci la città...">
                            @error('city')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
        
                        {{-- provincia appartamento --}}
                        <div class="form-group col-12 col-sm-4">
                            <label for="province">Provincia</label>
                            <input type="text" 
                                  class="t2-form-control @error('province') is-invalid @enderror" 
                                  value="{{old('province')}}" style="text-transform:capitalize"
                                  id="province"  name="province" placeholder="Inserisci la provincia...">
                            @error('province')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
        
                        {{-- indirizzo appartamento --}}
                        <div class="form-group col-12 col-sm-4">
                            <label for="address">Indirizzo</label>
                            <input type="text" 
                                  class="t2-form-control @error('address') is-invalid @enderror" 
                                  value="{{old('address')}}" style="text-transform:capitalize"
                                  id="address"  name="address" placeholder="Inserisci l'indirizzo...">
                            @error('address')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
        
                    {{-- info generali appartamento --}}
                    <div class="row ">
                        {{-- numero camere --}}
                        <div class="form-group col-6 col-sm-3">
                            <label for="room_number">N° Stanze</label>
                            <input type="number" 
                                class="t2-form-control @error('room_number') is-invalid @enderror" 
                                value="{{old('room_number')}}" min="1" max="25"
                                id="room_number"  name="room_number" placeholder="-"> 
                            @error('room_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="bed_number">N° Letti</label>
                            <input type="number" 
                                class="t2-form-control @error('bed_number') is-invalid @enderror" 
                                value="{{old('bed_number')}}" min="1" max="25"
                                id="bed_number"  name="bed_number" placeholder="-"> 
                            @error('bed_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="bathroom_number">N° Bagni</label>
                            <input type="number" 
                                class="t2-form-control @error('bathroom_number') is-invalid @enderror" 
                                value="{{old('bathroom_number')}}" min="1" max="25"
                                id="bathroom_number"  name="bathroom_number" placeholder="-"> 
                            @error('bathroom_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="square_meters">Metri Quadri</label>
                            <input type="number" 
                                class="t2-form-control @error('square_meters') is-invalid @enderror" 
                                value="{{old('square_meters')}}" min="1" max="32000"
                                id="square_meters"  name="square_meters" placeholder="-"> 
                            @error('square_meters')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>                
                    </div>
                    <div class="form-group">
                        <h5>Servizi</h5>
                        @foreach ($services as $service)
                            <div class="form-check form-check-inline custom-checkbox">
                                <input class="form-check-input custom-control-input" type="checkbox" 
                                name="services[]" id="service{{ $loop->iteration }}" value="{{ $service->id }}"
                                @if(in_array($service->id, old('services', []))) checked @endif>
                                
                                <label class="form-check-label custom-control-label" for="service{{ $loop->iteration }}">
                                    {{ $service->name }}
                                </label>
                            </div>
                        @endforeach 
                    </div>
                    <div class="mb-5">
                        <label for="cover">Immagine</label> 
                        <br>
                        <input type="file" class="t2-button" name="cover" id="cover">
                    </div>        
                    <button type="submit" class="t2-button">Crea</button>
                    <button type="reset" class="t2-button" >Reset</button>
                </form>

            </div>

        </div>
    </div>
    
@endsection


@section('title_page')
- Aggiungi un nuovo allogio
@endsection