@extends('layouts.app')

@section('content')

<div class="container-fluid>
    <div id="carouselDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @method('PATCH')
            @foreach ($eventsFut as $event)
            <li data-bs-target="#carouselExampleDark" data-bs-slide="{{$event->id}}" class="@if($loop->index==0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($eventsFut as $event)
            <div class="carousel-item @if($loop->index==0) active @endif" data-bs-interval="2000">
                <img width="800" height="400" src="{{ $event->image}}" class="d-block w-100" alt="Image Event">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="title-slider">{{$event->name}}</h5>
                    <a href="{{ route('showEvent',$event->id) }}" class="btn btn-danger">Ver Más</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br><br>
<div div class="newEvent ">
    @if(Auth::check() && Auth::user()->isAdmin)
    <button class="btn btn-warning button_new">
        <a href="{{route('createEvent')}}">
            Nuevo Evento
        </a>
    </button>
    @endif
</div>
<br><br>
<div class="container_cards">
    @foreach ($eventsFut as $event)
    <div class="card text-bg-dark mb-3 card_all" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4 container_image">
                <a href="{{ route('showEvent', ['id' => $event->id]) }}">
                    <img src=" {{ $event->image}} " class="img-fluid rounded-start imagecard" alt="image">
                </a>
            </div>
            <div class="col-md-8">
                <div class="container_title">
                    <h1 class="card-title">{{ $event->name}}</h1>
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <div class="icon_title">
                        <a id=“editButton” href="{{ route('editEvent', ['id' => $event->id]) }}">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0066 3.12457L13.8754 4.99254M13.2083 1.47897L8.15505 6.53226C7.89395 6.79299 7.71588 7.12519 7.64328 7.48697L7.17651 9.82347L9.51301 9.35582C9.87478 9.28346 10.2065 9.10611 10.4677 8.84493L15.521 3.79164C15.6729 3.63979 15.7933 3.45951 15.8755 3.26111C15.9577 3.0627 16 2.85006 16 2.63531C16 2.42055 15.9577 2.20791 15.8755 2.0095C15.7933 1.8111 15.6729 1.63082 15.521 1.47897C15.3692 1.32712 15.1889 1.20666 14.9905 1.12448C14.7921 1.0423 14.5794 1 14.3647 1C14.1499 1 13.9373 1.0423 13.7389 1.12448C13.5405 1.20666 13.3602 1.32712 13.2083 1.47897V1.47897Z" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2354 11.5882V14.2353C14.2354 14.7033 14.0495 15.1522 13.7185 15.4831C13.3876 15.8141 12.9387 16 12.4707 16H2.76472C2.29669 16 1.84783 15.8141 1.51688 15.4831C1.18593 15.1522 1 14.7033 1 14.2353V4.52931C1 4.06128 1.18593 3.61241 1.51688 3.28146C1.84783 2.95051 2.29669 2.76459 2.76472 2.76459H5.41181" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <form action="{{ route('delete',['id'=> $event->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <a type="button" onclick="return confirm ('¿Estás seguro de querer eliminar este Evento? {{$event->name}}')">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.75 3.75H11.25C11.25 3.41848 11.1183 3.10054 10.8839 2.86612C10.6495 2.6317 10.3315 2.5 10 2.5C9.66848 2.5 9.35054 2.6317 9.11612 2.86612C8.8817 3.10054 8.75 3.41848 8.75 3.75V3.75ZM7.5 3.75C7.5 3.08696 7.76339 2.45107 8.23223 1.98223C8.70107 1.51339 9.33696 1.25 10 1.25C10.663 1.25 11.2989 1.51339 11.7678 1.98223C12.2366 2.45107 12.5 3.08696 12.5 3.75H17.5C17.6658 3.75 17.8247 3.81585 17.9419 3.93306C18.0592 4.05027 18.125 4.20924 18.125 4.375C18.125 4.54076 18.0592 4.69973 17.9419 4.81694C17.8247 4.93415 17.6658 5 17.5 5H16.795L15.2887 16.0475C15.1866 16.7962 14.8166 17.4825 14.2474 17.9793C13.6781 18.4762 12.9481 18.75 12.1925 18.75H7.8075C7.0519 18.75 6.32189 18.4762 5.75263 17.9793C5.18336 17.4825 4.81341 16.7962 4.71125 16.0475L3.205 5H2.5C2.33424 5 2.17527 4.93415 2.05806 4.81694C1.94085 4.69973 1.875 4.54076 1.875 4.375C1.875 4.20924 1.94085 4.05027 2.05806 3.93306C2.17527 3.81585 2.33424 3.75 2.5 3.75H7.5ZM8.75 8.125C8.75 7.95924 8.68415 7.80027 8.56694 7.68306C8.44973 7.56585 8.29076 7.5 8.125 7.5C7.95924 7.5 7.80027 7.56585 7.68306 7.68306C7.56585 7.80027 7.5 7.95924 7.5 8.125V14.375C7.5 14.5408 7.56585 14.6997 7.68306 14.8169C7.80027 14.9342 7.95924 15 8.125 15C8.29076 15 8.44973 14.9342 8.56694 14.8169C8.68415 14.6997 8.75 14.5408 8.75 14.375V8.125ZM11.875 7.5C11.7092 7.5 11.5503 7.56585 11.4331 7.68306C11.3158 7.80027 11.25 7.95924 11.25 8.125V14.375C11.25 14.5408 11.3158 14.6997 11.4331 14.8169C11.5503 14.9342 11.7092 15 11.875 15C12.0408 15 12.1997 14.9342 12.3169 14.8169C12.4342 14.6997 12.5 14.5408 12.5 14.375V8.125C12.5 7.95924 12.4342 7.80027 12.3169 7.68306C12.1997 7.56585 12.0408 7.5 11.875 7.5Z" fill="#78290F" />
                                </svg>
                            </a>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="space-x-2 flex text-sm container_date">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.75 2.66675H4.25C2.68519 2.66675 1.41667 3.86066 1.41667 5.33341V12.0001C1.41667 13.4728 2.68519 14.6667 4.25 14.6667H12.75C14.3148 14.6667 15.5833 13.4728 15.5833 12.0001V5.33341C15.5833 3.86066 14.3148 2.66675 12.75 2.66675Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.66667 1.33337V4.00004M11.3333 1.33337V4.00004M1.41667 6.66671H15.5833" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="card-text">{{ $event->date}}</p>
                </div>
                <p class="card-text">{{ $event->description}}</p>
                <div class="space-x-2 flex text-sm container_ubication">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 1.25C7.76843 1.25215 6.10837 1.97717 4.88396 3.26602C3.65956 4.55486 2.97079 6.3023 2.96875 8.125C2.96668 9.61452 3.42889 11.0636 4.2845 12.25C4.2845 12.25 4.46262 12.4969 4.49172 12.5325L9.5 18.75L14.5107 12.5294C14.5368 12.4963 14.7155 12.25 14.7155 12.25L14.7161 12.2481C15.5713 11.0623 16.0333 9.61383 16.0312 8.125C16.0292 6.3023 15.3404 4.55486 14.116 3.26602C12.8916 1.97717 11.2316 1.25215 9.5 1.25ZM9.5 10.625C9.03027 10.625 8.57109 10.4784 8.18052 10.2037C7.78995 9.92897 7.48554 9.53852 7.30579 9.08171C7.12603 8.62489 7.07899 8.12223 7.17063 7.63727C7.26227 7.15232 7.48847 6.70686 7.82062 6.35723C8.15277 6.0076 8.57595 5.7695 9.03666 5.67304C9.49736 5.57657 9.9749 5.62608 10.4089 5.8153C10.8428 6.00452 11.2138 6.32495 11.4747 6.73607C11.7357 7.1472 11.875 7.63055 11.875 8.125C11.8742 8.78779 11.6237 9.42319 11.1785 9.89185C10.7333 10.3605 10.1296 10.6242 9.5 10.625Z" fill="white" />
                    </svg>
                    <p class="card-text">{{ $event->location}} {{ $event->musical_genre}}</p>
                </div>

                <div class="space-x-2 flex  container_spaces">

                    <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_space" type="submit"> {{ $event-> spaces}} pax</button>


                    <button method="post" onclick="return confirm ('Acabas de inscribirte de el evento {{$event->name}}')" class="btn btn-warning button_add" type="submit">
                        <a href="{{ route('inscribe', $event->id)}}">Check In</a>
                    </button>

                    <button method="post" onclick="return confirm ('Acabas de desinscribirte de el evento {{$event->name}}')" class="btn btn-warning button_add" type="submit">
                        <a href="{{ route('cancelInscription', $event->id)}}">Check Out</a>
                    </button>
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <button class="addButtonSlider btn btn-dark btn-sm" onclick="return confirm ('Deseas Agregar la imagen de {{$event->name}} al Slider? ')" class="btn btn-warning button_add" type="submit">
                        <a><svg class="icon_add" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C7.40625 1.25 1.25 7.40625 1.25 15C1.25 22.5938 7.40625 28.75 15 28.75C22.5938 28.75 28.75 22.5938 28.75 15C28.75 7.40625 22.5938 1.25 15 1.25ZM16.25 20C16.25 20.3315 16.1183 20.6495 15.8839 20.8839C15.6495 21.1183 15.3315 21.25 15 21.25C14.6685 21.25 14.3505 21.1183 14.1161 20.8839C13.8817 20.6495 13.75 20.3315 13.75 20V16.25H10C9.66848 16.25 9.35054 16.1183 9.11612 15.8839C8.8817 15.6495 8.75 15.3315 8.75 15C8.75 14.6685 8.8817 14.3505 9.11612 14.1161C9.35054 13.8817 9.66848 13.75 10 13.75H13.75V10C13.75 9.66848 13.8817 9.35054 14.1161 9.11612C14.3505 8.8817 14.6685 8.75 15 8.75C15.3315 8.75 15.6495 8.8817 15.8839 9.11612C16.1183 9.35054 16.25 9.66848 16.25 10V13.75H20C20.3315 13.75 20.6495 13.8817 20.8839 14.1161C21.1183 14.3505 21.25 14.6685 21.25 15C21.25 15.3315 21.1183 15.6495 20.8839 15.8839C20.6495 16.1183 20.3315 16.25 20 16.25H16.25V20Z" fill="white" />
                            </svg></a>
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<br>
{{ $events->links() }}
<div class="text-bg-light p-3 container_cards">
    <h2 class="p-2 m-1 border-0">Eventos pasados</h2>
</div>
<br>
<div class="container_cards ">
    @foreach ($eventsPast as $event)
    <div class="card text-bg-dark mb-3 card_all" style="max-width: 540px;">
        <div class="row g-0 opacity-50">
            <div class="col-md-4 container_image">
                <a href="{{ route('showEvent',$event->id) }}">
                    <img src=" {{ $event->image}} " class="img-fluid rounded-start imagecard" alt="image">
                </a>
            </div>
            <div class="col-md-8">
                <div class="container_title">
                    <h1 class="card-title">{{ $event->name}}</h1>
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <div class="icon_title">
                        <a id=“editButton” href="{{ route('editEvent', ['id' => $event->id]) }}">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0066 3.12457L13.8754 4.99254M13.2083 1.47897L8.15505 6.53226C7.89395 6.79299 7.71588 7.12519 7.64328 7.48697L7.17651 9.82347L9.51301 9.35582C9.87478 9.28346 10.2065 9.10611 10.4677 8.84493L15.521 3.79164C15.6729 3.63979 15.7933 3.45951 15.8755 3.26111C15.9577 3.0627 16 2.85006 16 2.63531C16 2.42055 15.9577 2.20791 15.8755 2.0095C15.7933 1.8111 15.6729 1.63082 15.521 1.47897C15.3692 1.32712 15.1889 1.20666 14.9905 1.12448C14.7921 1.0423 14.5794 1 14.3647 1C14.1499 1 13.9373 1.0423 13.7389 1.12448C13.5405 1.20666 13.3602 1.32712 13.2083 1.47897V1.47897Z" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2354 11.5882V14.2353C14.2354 14.7033 14.0495 15.1522 13.7185 15.4831C13.3876 15.8141 12.9387 16 12.4707 16H2.76472C2.29669 16 1.84783 15.8141 1.51688 15.4831C1.18593 15.1522 1 14.7033 1 14.2353V4.52931C1 4.06128 1.18593 3.61241 1.51688 3.28146C1.84783 2.95051 2.29669 2.76459 2.76472 2.76459H5.41181" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <button type="submit" onclick="return confirm ('¿Estas seguro de querer eliminar este Evento? {{$event->name}}')">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 3.75H11.25C11.25 3.41848 11.1183 3.10054 10.8839 2.86612C10.6495 2.6317 10.3315 2.5 10 2.5C9.66848 2.5 9.35054 2.6317 9.11612 2.86612C8.8817 3.10054 8.75 3.41848 8.75 3.75V3.75ZM7.5 3.75C7.5 3.08696 7.76339 2.45107 8.23223 1.98223C8.70107 1.51339 9.33696 1.25 10 1.25C10.663 1.25 11.2989 1.51339 11.7678 1.98223C12.2366 2.45107 12.5 3.08696 12.5 3.75H17.5C17.6658 3.75 17.8247 3.81585 17.9419 3.93306C18.0592 4.05027 18.125 4.20924 18.125 4.375C18.125 4.54076 18.0592 4.69973 17.9419 4.81694C17.8247 4.93415 17.6658 5 17.5 5H16.795L15.2887 16.0475C15.1866 16.7962 14.8166 17.4825 14.2474 17.9793C13.6781 18.4762 12.9481 18.75 12.1925 18.75H7.8075C7.0519 18.75 6.32189 18.4762 5.75263 17.9793C5.18336 17.4825 4.81341 16.7962 4.71125 16.0475L3.205 5H2.5C2.33424 5 2.17527 4.93415 2.05806 4.81694C1.94085 4.69973 1.875 4.54076 1.875 4.375C1.875 4.20924 1.94085 4.05027 2.05806 3.93306C2.17527 3.81585 2.33424 3.75 2.5 3.75H7.5ZM8.75 8.125C8.75 7.95924 8.68415 7.80027 8.56694 7.68306C8.44973 7.56585 8.29076 7.5 8.125 7.5C7.95924 7.5 7.80027 7.56585 7.68306 7.68306C7.56585 7.80027 7.5 7.95924 7.5 8.125V14.375C7.5 14.5408 7.56585 14.6997 7.68306 14.8169C7.80027 14.9342 7.95924 15 8.125 15C8.29076 15 8.44973 14.9342 8.56694 14.8169C8.68415 14.6997 8.75 14.5408 8.75 14.375V8.125ZM11.875 7.5C11.7092 7.5 11.5503 7.56585 11.4331 7.68306C11.3158 7.80027 11.25 7.95924 11.25 8.125V14.375C11.25 14.5408 11.3158 14.6997 11.4331 14.8169C11.5503 14.9342 11.7092 15 11.875 15C12.0408 15 12.1997 14.9342 12.3169 14.8169C12.4342 14.6997 12.5 14.5408 12.5 14.375V8.125C12.5 7.95924 12.4342 7.80027 12.3169 7.68306C12.1997 7.56585 12.0408 7.5 11.875 7.5Z" fill="#78290F" />
                            </svg>
                        </button>
                        </form>
                    </div>
                    @endif
                </div>
                <div class="space-x-2 flex text-sm container_date">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.75 2.66675H4.25C2.68519 2.66675 1.41667 3.86066 1.41667 5.33341V12.0001C1.41667 13.4728 2.68519 14.6667 4.25 14.6667H12.75C14.3148 14.6667 15.5833 13.4728 15.5833 12.0001V5.33341C15.5833 3.86066 14.3148 2.66675 12.75 2.66675Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5.66667 1.33337V4.00004M11.3333 1.33337V4.00004M1.41667 6.66671H15.5833" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="card-text">{{ $event->date}}</p>
                </div>
                <p class="card-text">{{ $event->description}}</p>
                <div class="space-x-2 flex text-sm container_ubication">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 1.25C7.76843 1.25215 6.10837 1.97717 4.88396 3.26602C3.65956 4.55486 2.97079 6.3023 2.96875 8.125C2.96668 9.61452 3.42889 11.0636 4.2845 12.25C4.2845 12.25 4.46262 12.4969 4.49172 12.5325L9.5 18.75L14.5107 12.5294C14.5368 12.4963 14.7155 12.25 14.7155 12.25L14.7161 12.2481C15.5713 11.0623 16.0333 9.61383 16.0312 8.125C16.0292 6.3023 15.3404 4.55486 14.116 3.26602C12.8916 1.97717 11.2316 1.25215 9.5 1.25ZM9.5 10.625C9.03027 10.625 8.57109 10.4784 8.18052 10.2037C7.78995 9.92897 7.48554 9.53852 7.30579 9.08171C7.12603 8.62489 7.07899 8.12223 7.17063 7.63727C7.26227 7.15232 7.48847 6.70686 7.82062 6.35723C8.15277 6.0076 8.57595 5.7695 9.03666 5.67304C9.49736 5.57657 9.9749 5.62608 10.4089 5.8153C10.8428 6.00452 11.2138 6.32495 11.4747 6.73607C11.7357 7.1472 11.875 7.63055 11.875 8.125C11.8742 8.78779 11.6237 9.42319 11.1785 9.89185C10.7333 10.3605 10.1296 10.6242 9.5 10.625Z" fill="white" />
                    </svg>
                    <p class="card-text">{{ $event->location}} {{ $event->musical_genre}}</p>
                </div>
                <div class="space-x-2 flex  container_spaces">
                    <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_space" type="submit"> {{ $event-> spaces}} pax</button>
                    <button method="post" onclick="return confirm ('Acabas de inscribirte de el evento {{$event->name}}')" class="btn btn-warning button_add" type="submit">
                        <a href="{{ route('inscribe', $event->id)}}">Check Inn</a>
                    </button>
                    <button method="post" onclick="return confirm ('Acabas de desinscribirte de el evento {{$event->name}}')" class="btn btn-warning button_add" type="submit">
                        <a href="{{ route('cancelInscription', $event->id)}}">Check Out</a>
                    </button>
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <a class="addButtonSlider">
                        <svg class="icon_add" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C7.40625 1.25 1.25 7.40625 1.25 15C1.25 22.5938 7.40625 28.75 15 28.75C22.5938 28.75 28.75 22.5938 28.75 15C28.75 7.40625 22.5938 1.25 15 1.25ZM16.25 20C16.25 20.3315 16.1183 20.6495 15.8839 20.8839C15.6495 21.1183 15.3315 21.25 15 21.25C14.6685 21.25 14.3505 21.1183 14.1161 20.8839C13.8817 20.6495 13.75 20.3315 13.75 20V16.25H10C9.66848 16.25 9.35054 16.1183 9.11612 15.8839C8.8817 15.6495 8.75 15.3315 8.75 15C8.75 14.6685 8.8817 14.3505 9.11612 14.1161C9.35054 13.8817 9.66848 13.75 10 13.75H13.75V10C13.75 9.66848 13.8817 9.35054 14.1161 9.11612C14.3505 8.8817 14.6685 8.75 15 8.75C15.3315 8.75 15.6495 8.8817 15.8839 9.11612C16.1183 9.35054 16.25 9.66848 16.25 10V13.75H20C20.3315 13.75 20.6495 13.8817 20.8839 14.1161C21.1183 14.3505 21.25 14.6685 21.25 15C21.25 15.3315 21.1183 15.6495 20.8839 15.8839C20.6495 16.1183 20.3315 16.25 20 16.25H16.25V20Z" fill="white" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    {{ $events->links() }}
    @endsection