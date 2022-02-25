@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Ciao {{Auth::user()->name}}!
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

                        <a type="button" class="btn btn-primary"
                        href="{{ route('host.flats.index')}}">Your flats</a>
                        {{-- <button><a href="{{ route('host.flats.edit')}}"> Edit</a></button> --}}
                        <a type="button" class="btn btn-warning"
                        href="{{ route('host.flats.create')}}">Add a flat</a>
                        {{-- <button><a href="{{ route('host.flats.show')}}"> Show</a></button> --}}
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection