@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>I nosti piani</h1>
    <div class="row justify-content-around mt-5">
        @foreach ($plans as $plan)
            <div class="col-12 col-md-3 text-center t2-message pt-5 pb-5">
                <h2 class="mb-3"><strong>{{$plan->name}}</strong></h2>
                <h3 class="mb-3"><em>{{$plan->duration}} ore</em></h3>
                <h3 class="mb-3"><em>{{$plan->price}} €</em></h3>
                
                <a class="t2-button " href="{{route('host.payment', compact('slug','plan'))}}">Acquista</a>
            </div>
        @endforeach
    </div>
    
</div>


    
@endsection