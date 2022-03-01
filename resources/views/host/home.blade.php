@extends('layouts.app')

@section('content')
<section class="">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="t2-card">
                    <div class="card-header">
                        <h4 >
                            @if (Auth::user()->name)
                                Ciao <strong>{{Auth::user()->name}}</strong> !
                            @else
                                Ciao <strong>{{Auth::user()->email}}</strong>!
                            @endif
                            
                        </h4>
                    </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
    
                        <div class="button-zone mt-4">
    
                            <a type="button" class="t2-button "
                            href="{{ route('host.flats.index')}}">Your flats</a>
                            <a type="button" class="t2-button "
                            href="{{ route('host.flats.create')}}">Add a flat</a>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection


@section('title_page')
- Dashboard
@endsection