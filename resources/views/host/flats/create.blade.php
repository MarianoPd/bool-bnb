@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ciao {{Auth::user()->email}}</h2>
        <h1 class="mb-4">Add a new Flat</h1>

        <form action="{{route('host.flats.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- titolo appartamento --}}
            <div class="form-group">
                <label for="title">Title</label>
                <textarea name="title" id="title" cols="30" rows="5" type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{old('title')}}"
                    id="title"  name="title" placeholder="Describe your flat..."></textarea>
                @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            {{-- indirizzo --}}
            <div class="address-zone d-flex justify-content-between">
                {{-- città appartamento --}}
                <div class="form-group">
                    <label for="city">City</label>
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
                    <label for="province">Province</label>
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
                    <label for="address">Address</label>
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
            <div class="info-zone d-flex justify-content-between">
                {{-- numero camere --}}
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input type="number" 
                        class="form-control @error('room_number') is-invalid @enderror" 
                        value="{{old('room_number')}}" min="1" max="25"
                        id="room_number"  name="room_number" placeholder="1"> 
                    @error('room_number')
                        <p class="invalid-feedback">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-warning">Create</button>
            <button type="reset" class="btn btn-danger" >Reset</button>
        </form>
    </div>
    
@endsection