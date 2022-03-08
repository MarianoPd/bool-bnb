@extends('layouts.app')

@section('content')

    <div class="container">
        
        
        <div class="row">
            <div class="col-6">
                @if (count($flats) !== 0)
                    <h1>I tuoi appartamenti</h1>
                @else
                    <h1>Non hai registrato ancora nessun appartamento</h1>   
                @endif
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a type="button" class="t2-button mr-2"
                href="{{ url('/') }}">Torna alla Homepage</a>
                <a type="button" class="t2-button"
                href="{{ route('host.flats.create')}}">Aggiungi appartamento</a>
            </div>
        </div>


        <div class="row d-flex align-content-between flex-wrap">
            <div class="container-card">

                @foreach ($flats as $flat)
                    <div class="col-3 card mb-5 mr-5 mt-5 t2-card" style="width: 18rem; ">

                        @if ($flat->cover)
                            <div class="image pt-3">
                                <img width="100%" height="250px"
                                src="{{ asset('storage/' . $flat->cover) }}" alt="Nessuna immagine disponibile">
                            </div>
                        @else 
                            
                            <div class="image pt-3">
                                <img width="100%"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAQlBMVEX///+hoaGenp6ampr39/fHx8fOzs7j4+P8/Pyvr6/d3d3FxcX29va6urqYmJjs7OzU1NSlpaW1tbWtra3n5+e/v78TS0zBAAACkUlEQVR4nO3b63KCMBCGYUwUUVEO6v3fagWVY4LYZMbZnff51xaZ5jON7CZNEgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQb5tvI8qzX4/nH84XG5Upfj2ir2V2E5fZ/XpIX9saMnhkYLIkiyRJjdgMoiEDMmiQgfwM8rSu77ew2wnPoLTmwdZBs0J2BuXrYckcQm4nOoP+WcmWAbcTnUHZPy9eA24nOoN7n0HI54ToDM5k8PjluwyqgNuJzqDoaugPg8gWZ4noDAYLwuIg75fLeeHHsjNIzrZJwWwW+0DNsmEWPjiEZ5AcD8ZUu8VZ8HyQMifvBdIz+PS33i8adu+7Qn4Gn1Tdupl7rlCfQb9seosK7RkcBy1o30iVZ5CPOtDW3WhQnsF13IV3v0p3BqfJRoSpXVepzmA/24+yqeMyzRm4tqOs44lSUwa3yfgOri25av5CPRnklR33VlPnrqSZV09qMsiqSWV082xOz1uPajJ49pTM/f115k6guWa6JGjJ4N1lt8fXN2rv/vysjFaSQdFXBc/KKF04ptFPliclGVR9Bu27XCyeVOkmy5OODAZN9rYyyip/AIPJ8qIig+PoXbf7YdPdncFoSdCQQT4ZceV+MhiFMBy0hgyu0yGvOLI17KwpyGBaHK5jtt0N5GcwLw7XZdB31sRn8O+ziqYro8Vn4CwOV+k6a9Iz+PwRsKC7h+gMfMXhKu/OmuwM/MXhKq8yWnYG/uJw5Uxoy2jRGZTBZ/jboxuSM1guDtdNhKazJjiDbNMe0AxzKUVnkO+jEJxBxNtJzWCTxlNLzSB8KehJ/H+mJGYAjaDjzj9SnHZRuXZiAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECXP1XDHv7U4SNFAAAAAElFTkSuQmCC" alt="">
                            </div>
                        @endif

                        <div class="card-body">
                            <h3 class="card-title">{{$flat->title}}</h3>
                            <p class="card-text">{{$flat->address}}, {{$flat->city}}, {{$flat->province}}</p>
                            
                            <a href="{{ route('host.flats.show', $flat->slug) }}" class="btn btn-primary">Dettagli</a>
                            <a href="#" class="btn btn-warning">Sponsorizza</a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection


@section('title_page')
- I tuoi alloggi
@endsection