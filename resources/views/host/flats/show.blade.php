@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <div class="button-zone mb-3">
            {{-- bottone edi --}}
            

            {{-- Bottone torna alla lista appartamenti --}}
            <button class="t2-button ">
                <a href="{{ route('host.flats.index')}}">I miei appartamenti</a>
            </button>
            <button class="t2-button ml-5">
                <a href="{{ route('host.plans', $flat->slug)}}">Sponsorizza il tuo appartamento</a>
            </button>
        </div>

        @if ($flat->cover)
            <div class="w-100">
                <img src="{{asset('storage/'. $flat->cover)}}" alt="{{$flat->title}}" class="w-100">
            </div>
        @else         
            <div class="w- 100">
                <img class="w-100"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAQlBMVEX///+hoaGenp6ampr39/fHx8fOzs7j4+P8/Pyvr6/d3d3FxcX29va6urqYmJjs7OzU1NSlpaW1tbWtra3n5+e/v78TS0zBAAACkUlEQVR4nO3b63KCMBCGYUwUUVEO6v3fagWVY4LYZMbZnff51xaZ5jON7CZNEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQb5tvI8qzX4/nH84XG5Upfj2ir2V2E5fZ/XpIX9saMnhkYLIkiyRJjdgMoiEDMmiQgfwM8rSu77ew2wnPoLTmwdZBs0J2BuXrYckcQm4nOoP+WcmWAbcTnUHZPy9eA24nOoN7n0HI54ToDM5k8PjluwyqgNuJzqDoaugPg8gWZ4noDAYLwuIg75fLeeHHsjNIzrZJwWwW+0DNsmEWPjiEZ5AcD8ZUu8VZ8HyQMifvBdIz+PS33i8adu+7Qn4Gn1Tdupl7rlCfQb9seosK7RkcBy1o30iVZ5CPOtDW3WhQnsF13IV3v0p3BqfJRoSpXVepzmA/24+yqeMyzRm4tqOs44lSUwa3yfgOri25av5CPRnklR33VlPnrqSZV09qMsiqSWV082xOz1uPajJ49pTM/f115k6guWa6JGjJ4N1lt8fXN2rv/vysjFaSQdFXBc/KKF04ptFPliclGVR9Bu27XCyeVOkmy5OODAZN9rYyyip/AIPJ8qIig+PoXbf7YdPdncFoSdCQQT4ZceV+MhiFMBy0hgyu0yGvOLI17KwpyGBaHK5jtt0N5GcwLw7XZdB31sRn8O+ziqYro8Vn4CwOV+k6a9Iz+PwRsKC7h+gMfMXhKu/OmuwM/MXhKq8yWnYG/uJw5Uxoy2jRGZTBZ/jboxuSM1guDtdNhKazJjiDbNMe0AxzKUVnkO+jEJxBxNtJzWCTxlNLzSB8KehJ/H+mJGYAjaDjzj9SnHZRuXZiAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECXP1XDHv7U4SNFAAAAAElFTkSuQmCC" alt="">
            </div>
        @endif
        <div class="mt-4 container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$flat->title}}</h2>

                </div>

                <div class="name-address col-12 col-md-6">

                    <h5 class="mb-2">Indirizzo:</h5>
                    <p class="mb-4">{{$flat->address}}, {{$flat->city}}, {{$flat->province}}</p>


                    @if (!empty($flat->services))
                        <h5>Servizi aggiuntivi:</h5>
                        <ul>
                            @foreach ($flat->services as $service)
                            <li>{{$service->name}}</li>
                            @endforeach
                        </ul>  

                    @else
                        
                        <h5>Nessun servizio aggiuntivo disponibile in questa casa</h5>
                                
                    @endif

                </div>

                {{-- quadrato con info dimensione casa --}}
                <div class="info-house col-12 col-md-6">

                    {{-- <div class="container-square"> --}}
                        <div class="row row-cols-2 bg-white mb-5">
                            <div class="col-6 border p-3">
                                <h6>Numero di stanze:</h6>
                                <div class="d-flex justify-content-around align-items-center">
                                    <h2 class="mr-3">{{$flat->room_number}}</h2>
                                    <img width="50px" src="{{asset('img/logos/door2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 border p-3">
                                <h6>Numero di bagni:</h6>
                                <div class="d-flex justify-content-around align-items-center">
                                    <h2 class="mr-3">{{$flat->bathroom_number}}</h2>
                                    <img width="50px" src="{{asset('img/logos/bathroom.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 border p-3">
                                <h6>Numero di letti:</h6>
                                <div class="d-flex justify-content-around align-items-center">
                                    <h2 class="mr-3">{{$flat->bed_number}}</h2>
                                    <img width="50px" src="{{asset('img/logos/bedroom.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-6 border p-3">
                                <h6>Metri quadri:</h6>
                                <div class="d-flex justify-content-around align-items-center">
                                    <h2 class="mr-3">{{$flat->square_meters}}</h2>
                                    <img width="50px" src="{{asset('img/logos/metri_quadri2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
            

            {{-- bottone elimina --}}
            <div>
                <button class="t2-button mr-2">
                    <a href="{{route('host.flats.edit', $flat)}}">Modifica appartamento</a>
                </button>
                <form onsubmit="return confirm('Questa azione canceller?? definitivamente questo appartamento e tutti i sui dati. Sei sicuro di procedere?')"
                action="{{route('host.flats.destroy', $flat)}}" method="POST" class="mb-5 d-inline-block">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="t2-button">
                        Elimina appartamento
                    </button>
                </form>      
            </div>   

        </div>
        <div>
            @foreach ($flat->messages as $message)
                <div class="t2-message">
                    <p class="d-flex justify-content-around">
                        <span>Da: <strong class="text-danger">{{$message->email}}</strong></span>
                        <span>Data: <strong>{{date_format($message->created_at, 'd-m-Y')}}</strong></span>
                    </p>
                    
                    <p>{{$message->text}}</p>
                    
                </div>
            @endforeach
        </div>
    </div>
    
@endsection

@section('title_page')
- Alloggio
@endsection