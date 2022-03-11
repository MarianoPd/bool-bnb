@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="t2-message m-5 text-center">
        <h1>Piano {{$sponsorship->name}} per appartmento:</h1>
        <h1>{{$flat->title}}</h1>
        <h3>Prezzo: {{$sponsorship->price}}</h3>
        
        <form action="{{route('host.pay')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <script src="https://js.braintreegateway.com/web/dropin/1.33.0/js/dropin.js"></script>

            <div id="dropin-container"></div>
            <button id="submit-button" class="button button--small button--green" type="submit">Purchase</button>
            
            <input type="hidden" name="token" id="token" value="{{$response->token}}">
            <input type="hidden" name="spoName" id="spoName" value="{{$sponsorship->name}}">
            <input type="hidden" name="flatSlug" id="flatSlug" value="{{$flat->slug}}">
            {{-- <br>
            <button class="t2-button mt-3" type="submit" >
                Paga Ora
            </button> --}}
        </form>
        

<script>
    //function sendPaymentData(){
    //    const cardN = document.getElementById('card').value;
    //    const token = document.getElementById('token').value;
    //}

    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
    authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
    selector: '#dropin-container'
    }, function (err, instance) {
    button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
         axios.post('http://127.0.0.1:8000/')
        });
    })
    });
</script>

@endsection