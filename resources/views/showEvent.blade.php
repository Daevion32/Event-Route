@extends('layouts.app')

@section('content')

<div class="container_show">

    <div class="card mb-3 card_show">
        <img src="{{ $event->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $event->date}}</p>
            <h5 class="card-title">Description/ {{ $event->spaces}} pax.</h5>
            <p class="card-text">{{ $event->description}}</p>
        <div class="buttons_cardShow">
            
        <a href="{{ url('/') }}" class="btn btn-dark">Desinscribirse</a>
            <a href="{{ url('/') }}" class="btn btn-dark">Inscribirse</a>

        </div>
          
        </div>
        <a href="{{ url('/') }}" class="btn btn-dark">Home</a>
    </div>
</div>





























@endsection