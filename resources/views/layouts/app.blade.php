<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--    <link href="/resources/css/app.css" rel="stylesheet"> -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="70" height="70" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_38_48" transform="scale(0.005)" />
                            </pattern>
                            <image id="image0_38_48" width="200" height="200" xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <!-- {{ __('Login') }} -->
                                <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.375 8.125C9.375 11.2262 11.8988 13.75 15 13.75C18.1012 13.75 20.625 11.2262 20.625 8.125C20.625 5.02375 18.1012 2.5 15 2.5C11.8988 2.5 9.375 5.02375 9.375 8.125ZM25 26.25H26.25V25C26.25 20.1763 22.3237 16.25 17.5 16.25H12.5C7.675 16.25 3.75 20.1763 3.75 25V26.25H25Z" fill="white" />
                                </svg>

                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <!-- {{ __('Register') }} -->
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.1853 5.5518C29.447 5.65623 29.6714 5.83667 29.8295 6.06984C29.9876 6.30301 30.0722 6.57822 30.0725 6.85995V23.1404C30.0722 23.4222 29.9876 23.6974 29.8295 23.9305C29.6714 24.1637 29.447 24.3441 29.1853 24.4486L15.5587 29.8992C15.2227 30.0336 14.8479 30.0336 14.5118 29.8992L0.885258 24.4486C0.623945 24.3439 0.399974 24.1633 0.242197 23.9301C0.0844202 23.697 6.55202e-05 23.4219 0 23.1404L0 6.85995C6.55202e-05 6.57843 0.0844202 6.30339 0.242197 6.07024C0.399974 5.83709 0.623945 5.65652 0.885258 5.5518L13.9893 0.309794L14.0081 0.304156L14.5118 0.101166C14.8484 -0.0337222 15.224 -0.0337222 15.5606 0.101166L16.0662 0.304156L16.085 0.309794L29.1853 5.5518ZM19.5546 3.72302L7.988 8.34854L3.46961 6.54231L1.87953 7.17947V7.93128L14.0965 12.8181V27.7077L15.0362 28.0836L15.976 27.7077V12.8199L28.1929 7.93316V7.18135L26.6028 6.54419L15.0362 11.1678L10.5178 9.3616L22.0845 4.73608L19.5546 3.72302Z" fill="white" />
                                </svg>

                            </a>
                        </li>
                        @endif

                        
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>