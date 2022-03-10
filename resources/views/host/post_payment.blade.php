@extends('layouts.app')

@section('content')
<div class="container ">
   
   <div class="row justify-content-center">
      <div class="t2-message m-5 text-center p-5">
         {{-- <h1>Piano {{$sponsorship->name}} per appartmento:</h1>
         <h1>{{$flat->title}}</h1>
         <h3>Prezzo: {{$sponsorship->price}}</h3> --}}
         
         <div>
            @if ($response->success === true)
               <h2 class="text-success">{{$response->message}}</h2>
            @elseif ($response->success === false)
               <h2 class="text-danger">{{$response->message}}</h2>
            @endif
         </div>
         
      </div>
   </div>
    
</div>

<script>
  
</script>

@endsection