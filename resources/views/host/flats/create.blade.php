@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ciao {{Auth::user()->email}}</h2>
        <h1>Insert new Flat</h1>
        <form action="{{route('host.flats.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" 
                      class="form-control @error('title') is-invalid @enderror" 
                      value="{{old('title')}}"
                      id="title"  name="title" placeholder="...">
                @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" 
                      class="form-control @error('city') is-invalid @enderror" 
                      value="{{old('city')}}"
                      id="city"  name="city" placeholder="...">
                @error('city')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="province">province</label>
                <input type="text" 
                      class="form-control @error('province') is-invalid @enderror" 
                      value="{{old('province')}}"
                      id="province"  name="province" placeholder="...">
                @error('province')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" 
                      class="form-control @error('address') is-invalid @enderror" 
                      value="{{old('address')}}"
                      id="address"  name="address" placeholder="...">
                @error('address')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="room_number">room number</label>
                <input type="number" 
                      class="form-control @error('room_number') is-invalid @enderror" 
                      value="{{old('room_number')}}"
                      id="room_number"  name="room_number" placeholder="1"> 
                @error('room_number')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <button type="reset" class="btn btn-secondary" >Reset</button>
        </form>
    </div>
    
@endsection