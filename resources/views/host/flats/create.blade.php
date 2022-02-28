@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ciao {{Auth::user()->email}}</h2>
        <h1 class="mb-4">Aggiungi Appartamento</h1>

        <form action="{{route('host.flats.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- titolo appartamento --}}
            <div class="form-group">
                <label for="title">Titolo</label>
                <input name="title" id="title" cols="30" rows="5" type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{old('title')}}"
                    id="title"  name="title" placeholder="Describe your flat...">
                @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            {{-- indirizzo --}}
            <div class="address-zone d-flex justify-content-between">
                {{-- città appartamento --}}
                <div class="form-group">
                    <label for="city">Città</label>
                    <input type="text" 
                          class="form-control @error('city') is-invalid @enderror" 
                          value="{{old('city')}}" style="text-transform:capitalize"
                          id="city"  name="city" placeholder="Insert a city...">
                    @error('city')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                {{-- provincia appartamento --}}
                <div class="form-group">
                    <label for="province">Provincia</label>
                    <input type="text" 
                          class="form-control @error('province') is-invalid @enderror" 
                          value="{{old('province')}}" style="text-transform:capitalize"
                          id="province"  name="province" placeholder="Insert a province...">
                    @error('province')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>

                {{-- indirizzo appartamento --}}
                <div class="form-group">
                    <label for="address">Indirizzo</label>
                    <input type="text" 
                          class="form-control @error('address') is-invalid @enderror" 
                          value="{{old('address')}}" style="text-transform:capitalize"
                          id="address"  name="address" placeholder="Insert an address...">
                    @error('address')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>

            {{-- info generali appartamento --}}
            <div class="info-zone d-flex ">
                {{-- numero camere --}}
                <div class="form-group mr-5">
                    <label for="room_number">N° Stanze</label>
                    <input type="number" 
                        class="form-control @error('room_number') is-invalid @enderror" 
                        value="{{old('room_number')}}, 1" min="1" max="25"
                        id="room_number"  name="room_number" placeholder="1"> 
                    @error('room_number')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mr-5">
                    <label for="bed_number">N° Letti</label>
                    <input type="number" 
                        class="form-control @error('bed_number') is-invalid @enderror" 
                        value="{{old('bed_number')}}" min="1" max="25"
                        id="bed_number"  name="bed_number" placeholder="1"> 
                    @error('bed_number')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mr-5">
                    <label for="bathroom_number">N° Bagni</label>
                    <input type="number" 
                        class="form-control @error('bathroom_number') is-invalid @enderror" 
                        value="{{old('bathroom_number')}}" min="1" max="25"
                        id="bathroom_number"  name="bathroom_number" placeholder="1"> 
                    @error('bathroom_number')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mr-5">
                    <label for="square_meters">Metri Quadri</label>
                    <input type="number" 
                        class="form-control @error('square_meters') is-invalid @enderror" 
                        value="{{old('square_meters')}}" min="1" max="32000"
                        id="square_meters"  name="square_meters" placeholder="1"> 
                    @error('square_meters')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="cover">Immagine</label>
                <input type="file" class="btn btn-primary" name="cover" id="cover">
            </div>

            <button type="submit" class="btn btn-warning">Crea</button>
            <button type="reset" class="btn btn-danger" >Reset</button>
        </form>
    </div>
    
@endsection