
@extends('layouts.app')

@section('content')


    <div class="p-3 m-0 border-0 bd-example">   

    
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img width="800" height="400" src="https://static.lasuperagenda.com/media/202208/coldplay-barcelona-2023-360x240.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container_cards">
        @foreach ($events as $event)
        <div class="card text-bg-dark mb-3 card_all" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 container_image">
                    <img src=" {{ $event->image}} " class="img-fluid rounded-start imagecard" alt="image">
                </div>
                <div class="col-md-8">
                    <div class="container_title">
                        <h1 class="card-title">{{ $event->name}}</h1>
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
                                <button type="submit" 
                                    onclick="return confirm ('¿Estas seguro de querer eliminar este Evento? {{$event->name}}')">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.75 3.75H11.25C11.25 3.41848 11.1183 3.10054 10.8839 2.86612C10.6495 2.6317 10.3315 2.5 10 2.5C9.66848 2.5 9.35054 2.6317 9.11612 2.86612C8.8817 3.10054 8.75 3.41848 8.75 3.75V3.75ZM7.5 3.75C7.5 3.08696 7.76339 2.45107 8.23223 1.98223C8.70107 1.51339 9.33696 1.25 10 1.25C10.663 1.25 11.2989 1.51339 11.7678 1.98223C12.2366 2.45107 12.5 3.08696 12.5 3.75H17.5C17.6658 3.75 17.8247 3.81585 17.9419 3.93306C18.0592 4.05027 18.125 4.20924 18.125 4.375C18.125 4.54076 18.0592 4.69973 17.9419 4.81694C17.8247 4.93415 17.6658 5 17.5 5H16.795L15.2887 16.0475C15.1866 16.7962 14.8166 17.4825 14.2474 17.9793C13.6781 18.4762 12.9481 18.75 12.1925 18.75H7.8075C7.0519 18.75 6.32189 18.4762 5.75263 17.9793C5.18336 17.4825 4.81341 16.7962 4.71125 16.0475L3.205 5H2.5C2.33424 5 2.17527 4.93415 2.05806 4.81694C1.94085 4.69973 1.875 4.54076 1.875 4.375C1.875 4.20924 1.94085 4.05027 2.05806 3.93306C2.17527 3.81585 2.33424 3.75 2.5 3.75H7.5ZM8.75 8.125C8.75 7.95924 8.68415 7.80027 8.56694 7.68306C8.44973 7.56585 8.29076 7.5 8.125 7.5C7.95924 7.5 7.80027 7.56585 7.68306 7.68306C7.56585 7.80027 7.5 7.95924 7.5 8.125V14.375C7.5 14.5408 7.56585 14.6997 7.68306 14.8169C7.80027 14.9342 7.95924 15 8.125 15C8.29076 15 8.44973 14.9342 8.56694 14.8169C8.68415 14.6997 8.75 14.5408 8.75 14.375V8.125ZM11.875 7.5C11.7092 7.5 11.5503 7.56585 11.4331 7.68306C11.3158 7.80027 11.25 7.95924 11.25 8.125V14.375C11.25 14.5408 11.3158 14.6997 11.4331 14.8169C11.5503 14.9342 11.7092 15 11.875 15C12.0408 15 12.1997 14.9342 12.3169 14.8169C12.4342 14.6997 12.5 14.5408 12.5 14.375V8.125C12.5 7.95924 12.4342 7.80027 12.3169 7.68306C12.1997 7.56585 12.0408 7.5 11.875 7.5Z" fill="#78290F"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
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
                        <p class="card-text">{{ $event-> location}} {{ $event->musical_genre}}</p>
                    </div>

                    <div class="space-x-2 flex  container_spaces">

                        <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_space" type="submit"> {{ $event-> spaces}} pax</button>

                        <a href="{{ route('showEvent',$event->id) }}">
                            <svg class="icon_show" width="30" height="" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.33333 11.6674C6.96667 11.684 5.61417 11.389 4.37833 10.8049C3.42059 10.3375 2.56056 9.69215 1.84417 8.90319C1.08538 8.08745 0.487907 7.1354 0.0833333 6.09736L0 5.83403L0.0875 5.57069C0.492328 4.53355 1.08851 3.58174 1.845 2.76486C2.56112 1.97596 3.42086 1.33058 4.37833 0.863194C5.61393 0.278685 6.96657 -0.0162963 8.33333 0.000694476C9.7 -0.0159722 11.0525 0.279028 12.2883 0.863194C13.2467 1.32986 14.1058 1.97569 14.8225 2.76486C15.5825 3.57986 16.1808 4.53153 16.5833 5.57069L16.6667 5.83403L16.5792 6.09736C15.9409 7.75875 14.8078 9.18399 13.3329 10.1802C11.8581 11.1764 10.1129 11.6956 8.33333 11.6674V11.6674ZM8.33333 1.66736C6.94697 1.62392 5.57952 1.9979 4.40822 2.74083C3.23691 3.48376 2.31577 4.56138 1.76417 5.83403C2.31567 7.10674 3.2368 8.18443 4.40812 8.92738C5.57945 9.67032 6.94695 10.0443 8.33333 10.0007C9.71967 10.044 11.0871 9.67 12.2584 8.92708C13.4296 8.18417 14.3508 7.10661 14.9025 5.83403C14.3517 4.56083 13.4307 3.48269 12.2592 2.73965C11.0877 1.99661 9.71988 1.623 8.33333 1.66736V1.66736ZM8.33333 8.33403C7.75036 8.33789 7.18413 8.13923 6.73136 7.772C6.27858 7.40476 5.96734 6.89172 5.8508 6.32051C5.73426 5.74929 5.81965 5.15533 6.09238 4.64008C6.36511 4.12482 6.80826 3.72023 7.34615 3.49541C7.88404 3.27059 8.4833 3.23949 9.04158 3.40741C9.59985 3.57533 10.0825 3.93187 10.4071 4.41612C10.7317 4.90037 10.8782 5.48229 10.8214 6.0625C10.7646 6.64272 10.5082 7.18522 10.0958 7.59736C9.86534 7.83057 9.59089 8.01575 9.28836 8.1422C8.98583 8.26865 8.66123 8.33385 8.33333 8.33403V8.33403Z" fill="white" />
                            </svg>
                        </a>

                        <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_add" type="submit">Inscribete</button>
                           <a class="addButtonSlider">
                            <svg class="icon_add" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C7.40625 1.25 1.25 7.40625 1.25 15C1.25 22.5938 7.40625 28.75 15 28.75C22.5938 28.75 28.75 22.5938 28.75 15C28.75 7.40625 22.5938 1.25 15 1.25ZM16.25 20C16.25 20.3315 16.1183 20.6495 15.8839 20.8839C15.6495 21.1183 15.3315 21.25 15 21.25C14.6685 21.25 14.3505 21.1183 14.1161 20.8839C13.8817 20.6495 13.75 20.3315 13.75 20V16.25H10C9.66848 16.25 9.35054 16.1183 9.11612 15.8839C8.8817 15.6495 8.75 15.3315 8.75 15C8.75 14.6685 8.8817 14.3505 9.11612 14.1161C9.35054 13.8817 9.66848 13.75 10 13.75H13.75V10C13.75 9.66848 13.8817 9.35054 14.1161 9.11612C14.3505 8.8817 14.6685 8.75 15 8.75C15.3315 8.75 15.6495 8.8817 15.8839 9.11612C16.1183 9.35054 16.25 9.66848 16.25 10V13.75H20C20.3315 13.75 20.6495 13.8817 20.8839 14.1161C21.1183 14.3505 21.25 14.6685 21.25 15C21.25 15.3315 21.1183 15.6495 20.8839 15.8839C20.6495 16.1183 20.3315 16.25 20 16.25H16.25V20Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

       </div>
        @endforeach
      </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection
  

    <a  href="{{route('createEvent')}}">
        <input  class="btn btn-primary btn-padding-y" id="addNewEvent" type=submit" value="Nuevo Evento"> 
    </a>
