@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="t2-message m-5 text-center">
        <h1>Piano {{$sponsorship->name}} per appartmento:</h1>
        <h1>{{$flat->title}}</h1>
        <h3>Prezzo: {{$sponsorship->price}}</h3>
        <p>{{$response->token}}</p>
        <form action="" >
            <label for="card">Inserire numero carta</label>
            <br>
            <input type="text" name="card">
            <br>
            <button class="t2-button mt-3" type="submit">
                Paga Ora
            </button>
        </form>
    </div>
    
</div>
    
@endsection