@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://www.charmex.net/images/articulos/large/28319ynarap-1-christie-spyder-y-terra-dan-vida-a-la-gran-pantalla-led-del-barcelona-beach-festival.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSMMJ2ID0Geym6VfIahQhWWUDhEMly_pmyYw&usqp=CAU" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
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
<div class="hola">
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                        <div >
    <div class="container_all">
           @foreach ($events as $event)
        <div class="card text-bg-dark mb-3 card_all" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 container_image">
                    <img src={{ $event->image}} class="img-fluid rounded-start imagecard" alt="image">
                </div>
                <div class="col-md-8">
                    <div class="container_title">
                        <h1 class="card-title">{{ $event->name}}</h1>
                        <div class="icon_title">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0066 3.12457L13.8754 4.99254M13.2083 1.47897L8.15505 6.53226C7.89395 6.79299 7.71588 7.12519 7.64328 7.48697L7.17651 9.82347L9.51301 9.35582C9.87478 9.28346 10.2065 9.10611 10.4677 8.84493L15.521 3.79164C15.6729 3.63979 15.7933 3.45951 15.8755 3.26111C15.9577 3.0627 16 2.85006 16 2.63531C16 2.42055 15.9577 2.20791 15.8755 2.0095C15.7933 1.8111 15.6729 1.63082 15.521 1.47897C15.3692 1.32712 15.1889 1.20666 14.9905 1.12448C14.7921 1.0423 14.5794 1 14.3647 1C14.1499 1 13.9373 1.0423 13.7389 1.12448C13.5405 1.20666 13.3602 1.32712 13.2083 1.47897V1.47897Z" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.2354 11.5882V14.2353C14.2354 14.7033 14.0495 15.1522 13.7185 15.4831C13.3876 15.8141 12.9387 16 12.4707 16H2.76472C2.29669 16 1.84783 15.8141 1.51688 15.4831C1.18593 15.1522 1 14.7033 1 14.2353V4.52931C1 4.06128 1.18593 3.61241 1.51688 3.28146C1.84783 2.95051 2.29669 2.76459 2.76472 2.76459H5.41181" stroke="#78290F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 3.75H11.25C11.25 3.41848 11.1183 3.10054 10.8839 2.86612C10.6495 2.6317 10.3315 2.5 10 2.5C9.66848 2.5 9.35054 2.6317 9.11612 2.86612C8.8817 3.10054 8.75 3.41848 8.75 3.75V3.75ZM7.5 3.75C7.5 3.08696 7.76339 2.45107 8.23223 1.98223C8.70107 1.51339 9.33696 1.25 10 1.25C10.663 1.25 11.2989 1.51339 11.7678 1.98223C12.2366 2.45107 12.5 3.08696 12.5 3.75H17.5C17.6658 3.75 17.8247 3.81585 17.9419 3.93306C18.0592 4.05027 18.125 4.20924 18.125 4.375C18.125 4.54076 18.0592 4.69973 17.9419 4.81694C17.8247 4.93415 17.6658 5 17.5 5H16.795L15.2887 16.0475C15.1866 16.7962 14.8166 17.4825 14.2474 17.9793C13.6781 18.4762 12.9481 18.75 12.1925 18.75H7.8075C7.0519 18.75 6.32189 18.4762 5.75263 17.9793C5.18336 17.4825 4.81341 16.7962 4.71125 16.0475L3.205 5H2.5C2.33424 5 2.17527 4.93415 2.05806 4.81694C1.94085 4.69973 1.875 4.54076 1.875 4.375C1.875 4.20924 1.94085 4.05027 2.05806 3.93306C2.17527 3.81585 2.33424 3.75 2.5 3.75H7.5ZM8.75 8.125C8.75 7.95924 8.68415 7.80027 8.56694 7.68306C8.44973 7.56585 8.29076 7.5 8.125 7.5C7.95924 7.5 7.80027 7.56585 7.68306 7.68306C7.56585 7.80027 7.5 7.95924 7.5 8.125V14.375C7.5 14.5408 7.56585 14.6997 7.68306 14.8169C7.80027 14.9342 7.95924 15 8.125 15C8.29076 15 8.44973 14.9342 8.56694 14.8169C8.68415 14.6997 8.75 14.5408 8.75 14.375V8.125ZM11.875 7.5C11.7092 7.5 11.5503 7.56585 11.4331 7.68306C11.3158 7.80027 11.25 7.95924 11.25 8.125V14.375C11.25 14.5408 11.3158 14.6997 11.4331 14.8169C11.5503 14.9342 11.7092 15 11.875 15C12.0408 15 12.1997 14.9342 12.3169 14.8169C12.4342 14.6997 12.5 14.5408 12.5 14.375V8.125C12.5 7.95924 12.4342 7.80027 12.3169 7.68306C12.1997 7.56585 12.0408 7.5 11.875 7.5Z" fill="#78290F" />
                            </svg>

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
                        <p class="card-text">{{ $event-> ubication}} </p>
                    </div>

                    <div class="space-x-2 flex  container_spaces">

                        <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_space" type="submit"> {{ $event-> spaces}} pax</button>

                        <a href="{{ route('showEvent',$event->id) }}">
                            <svg class="icon_show" width="30" height="" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.33333 11.6674C6.96667 11.684 5.61417 11.389 4.37833 10.8049C3.42059 10.3375 2.56056 9.69215 1.84417 8.90319C1.08538 8.08745 0.487907 7.1354 0.0833333 6.09736L0 5.83403L0.0875 5.57069C0.492328 4.53355 1.08851 3.58174 1.845 2.76486C2.56112 1.97596 3.42086 1.33058 4.37833 0.863194C5.61393 0.278685 6.96657 -0.0162963 8.33333 0.000694476C9.7 -0.0159722 11.0525 0.279028 12.2883 0.863194C13.2467 1.32986 14.1058 1.97569 14.8225 2.76486C15.5825 3.57986 16.1808 4.53153 16.5833 5.57069L16.6667 5.83403L16.5792 6.09736C15.9409 7.75875 14.8078 9.18399 13.3329 10.1802C11.8581 11.1764 10.1129 11.6956 8.33333 11.6674V11.6674ZM8.33333 1.66736C6.94697 1.62392 5.57952 1.9979 4.40822 2.74083C3.23691 3.48376 2.31577 4.56138 1.76417 5.83403C2.31567 7.10674 3.2368 8.18443 4.40812 8.92738C5.57945 9.67032 6.94695 10.0443 8.33333 10.0007C9.71967 10.044 11.0871 9.67 12.2584 8.92708C13.4296 8.18417 14.3508 7.10661 14.9025 5.83403C14.3517 4.56083 13.4307 3.48269 12.2592 2.73965C11.0877 1.99661 9.71988 1.623 8.33333 1.66736V1.66736ZM8.33333 8.33403C7.75036 8.33789 7.18413 8.13923 6.73136 7.772C6.27858 7.40476 5.96734 6.89172 5.8508 6.32051C5.73426 5.74929 5.81965 5.15533 6.09238 4.64008C6.36511 4.12482 6.80826 3.72023 7.34615 3.49541C7.88404 3.27059 8.4833 3.23949 9.04158 3.40741C9.59985 3.57533 10.0825 3.93187 10.4071 4.41612C10.7317 4.90037 10.8782 5.48229 10.8214 6.0625C10.7646 6.64272 10.5082 7.18522 10.0958 7.59736C9.86534 7.83057 9.59089 8.01575 9.28836 8.1422C8.98583 8.26865 8.66123 8.33385 8.33333 8.33403V8.33403Z" fill="white" />
                            </svg>
                        </a>

                        <button class="h-10 px-6 font-semibold rounded-md bg-red text-white button_add" type="submit"> Inscribite</button>
                        <!--    <svg class="icon_add" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C7.40625 1.25 1.25 7.40625 1.25 15C1.25 22.5938 7.40625 28.75 15 28.75C22.5938 28.75 28.75 22.5938 28.75 15C28.75 7.40625 22.5938 1.25 15 1.25ZM16.25 20C16.25 20.3315 16.1183 20.6495 15.8839 20.8839C15.6495 21.1183 15.3315 21.25 15 21.25C14.6685 21.25 14.3505 21.1183 14.1161 20.8839C13.8817 20.6495 13.75 20.3315 13.75 20V16.25H10C9.66848 16.25 9.35054 16.1183 9.11612 15.8839C8.8817 15.6495 8.75 15.3315 8.75 15C8.75 14.6685 8.8817 14.3505 9.11612 14.1161C9.35054 13.8817 9.66848 13.75 10 13.75H13.75V10C13.75 9.66848 13.8817 9.35054 14.1161 9.11612C14.3505 8.8817 14.6685 8.75 15 8.75C15.3315 8.75 15.6495 8.8817 15.8839 9.11612C16.1183 9.35054 16.25 9.66848 16.25 10V13.75H20C20.3315 13.75 20.6495 13.8817 20.8839 14.1161C21.1183 14.3505 21.25 14.6685 21.25 15C21.25 15.3315 21.1183 15.6495 20.8839 15.8839C20.6495 16.1183 20.3315 16.25 20 16.25H16.25V20Z" fill="white" />
                        </svg> -->
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
  

