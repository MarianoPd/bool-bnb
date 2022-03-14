@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="t2-card mb-5">
            <div class="card-header">
                <h1>Modifica</h1>
            </div>
            <div class="card-body">
                <form action="{{route('host.flats.update', $flat)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- titolo appartamento --}}
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input name="title" id="title" type="text" min="3" max="100"
                            class="t2-form-control @error('title') is-invalid @enderror" 
                            value="{{old('title', $flat->title)}}" required
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
                            <input type="text" required
                                  class="t2-form-control @error('city') is-invalid @enderror" 
                                  value="{{old('city', $flat->city)}}" style="text-transform:capitalize"
                                  id="city"  name="city" placeholder="Inserisci la città...">
                            @error('city')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
        
                        {{-- provincia appartamento --}}
                        <div class="form-group col-12 col-sm-4">
                            <label for="province">Provincia</label>
                            <input type="text" required
                                  class="t2-form-control @error('province') is-invalid @enderror" 
                                  value="{{old('province', $flat->province)}}" style="text-transform:capitalize"
                                  id="province"  name="province" placeholder="Inserisci la provincia...">
                            @error('province')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
        
                        {{-- indirizzo appartamento --}}
                        <div class="form-group col-12 col-sm-4">
                            <label for="address">Indirizzo</label>
                            <input type="text" required
                                  class="t2-form-control @error('address') is-invalid @enderror" 
                                  value="{{old('address', $flat->address)}}" style="text-transform:capitalize"
                                  id="address"  name="address" placeholder="Inserisci l'indirizzo...">
                            @error('address')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
        
                    {{-- info generali appartamento --}}
                    <div class="row">
                        {{-- numero camere --}}
                        <div class="form-group col-6 col-sm-3">
                            <label for="room_number">N° Stanze</label>
                            <input type="number" required
                                class="t2-form-control @error('room_number') is-invalid @enderror" 
                                value="{{old('room_number', $flat->room_number)}}" min="1" max="25"
                                id="room_number"  name="room_number" placeholder="-"> 
                            @error('room_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="bed_number">N° Letti</label>
                            <input type="number" required
                                class="t2-form-control @error('bed_number') is-invalid @enderror" 
                                value="{{old('bed_number', $flat->bed_number)}}" min="1" max="25"
                                id="bed_number"  name="bed_number" placeholder="-"> 
                            @error('bed_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="bathroom_number">N° Bagni</label>
                            <input type="number" required
                                class="t2-form-control @error('bathroom_number') is-invalid @enderror" 
                                value="{{old('bathroom_number', $flat->bathroom_number)}}" min="1" max="25"
                                id="bathroom_number"  name="bathroom_number" placeholder="-"> 
                            @error('bathroom_number')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="square_meters">Metri Quadri</label>
                            <input type="number" required
                                class="t2-form-control @error('square_meters') is-invalid @enderror" 
                                value="{{old('square_meters',$flat->square_meters)}}" min="1" max="32000"
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
                                @if(! $errors->any() && $flat->services->contains($service->id))
                                    checked
                                @elseif ($errors->any() && in_array($service->id, old('services', [])))
                                    checked
                                @endif>
                                
                                <label class="form-check-label custom-control-label" for="service{{ $loop->iteration }}">
                                    {{ $service->name }}
                                </label>
                            </div>
                        @endforeach 
                    </div>
        
        
                    <div class="mb-5">
                        <label for="cover">Immagine</label>
                        <br>
                        @if ($flat->cover)        
                        <div class="w-100">
                            <img width="200" src="{{asset('storage/' . $flat->cover)}}" alt="{{$flat->cover_original_name}}">
                        </div>    
                        <p>{{$flat->cover_original_name}} </p>
                        @endif

                        <input type="file" class="t2-button" name="cover" id="cover">
                    </div>

                    <input type="hidden" name="latitude" id="latitude" value="">
                    <input type="hidden" name="longitude" id="longitude" value="">
        
                    <a href="#" onclick="getLatLong()" class="t2-button">Salva</a>
                    <button hidden type="submit" id="submitBtn"></button>
                    <button type="reset" class="t2-button" >Reset</button>
                    
                </form>
                
            </div>           
            
        </div>
    </div>

    <script>
                    
        function getLatLong(){
            const city = document.getElementById('city');
            const province = document.getElementById('province');
            const address = document.getElementById('address');
            // ottengo stringa indirizzo da cercare
            const fullAddress = city.value + ", " + province.value + ", " + address.value;
            this.ttApiRequest(fullAddress);

        }

        // chiamata Api per avere long e lat dell'indirizzo
        function ttApiRequest(query) {
            tt.services.fuzzySearch({
                key: 'XiRMXj5sejVWEGY8Ze4M4Fq1PhYyKW4I',
                query: query,
            }).then(res => {
                // salvo valore lat
                const latInput = document.getElementById('latitude');
                latInput.value = res.results[0].position.lat;

                // salvo valore long
                const longInput = document.getElementById('longitude');
                longInput.value = res.results[0].position.lng;

                // submit
                document.getElementById('submitBtn').click();
            });
        }
             

    </script>
    
@endsection

@section('title_page')
- Modifica alloggi
@endsection