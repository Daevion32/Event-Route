@extends('layouts.app')

@section('content')

<div class="container_show">

    <div class="card mb-3  card_show" style="";>
        <img src="{{ $event->image}}" class="card-img-top img_cardShow" alt="...">
        <div class="card border-dark card_textshow">
            <p class="card-text">{{ $event->date}}</p>
            <h5 class="card-title">Description/ {{ $event->spaces}} pax.</h5>
            <p class="card-text">{{ $event->description}}</p>
            <div class="buttons_cardShow">

                <a href="{{ url('/') }}" class="btn btn-dark">Check Out</a>
                <a href="{{ url('/') }}" class="btn btn-dark">Check In</a>

            </div>
            <a href="{{ url('/') }}" class="btn btn-dark btn_home">Home</a>
    </div>
        </div>
       
</div>





























@endsection