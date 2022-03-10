@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="t2-message m-5 text-center">
        <h1>Piano {{$sponsorship->name}} per appartmento:</h1>
        <h1>{{$flat->title}}</h1>
        <h3>Prezzo: {{$sponsorship->price}}</h3>
        
        <form action="{{route('host.pay')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="card">Inserire numero carta</label>
            <br>
            <input type="text" name="card" id="card">
            <input type="hidden" name="token" id="token" value="{{$response->token}}">
            <input type="hidden" name="spoName" id="spoName" value="{{$sponsorship->name}}">
            <br>
            <button class="t2-button mt-3" type="submit" >
                Paga Ora
            </button>
        </form>
    </div>
    
</div>

<script>
    function sendPaymentData(){
        const cardN = document.getElementById('card').value;
        const token = document.getElementById('token').value;
    }
</script>

@endsection