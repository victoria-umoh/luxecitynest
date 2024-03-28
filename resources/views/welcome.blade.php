<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LuxeCityNest</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



        <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">

        <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/fontawesome.min.css') }}">
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="antialiased font-sans">
{{-- <body class="padding-top"> --}}

    <div class="container-fluid nav-container">
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid px-0">
                <a class="navbar-brand ps-5" href=""><i class="fa-solid fa-city"></i>&nbsp;LuxeCityNest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pe-4 custom-navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">For Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">For Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Short Let</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Agents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Post a Property</a>
                        </li>

                        @if (Route::has('login'))
                            {{-- <nav class="-mx-3 flex flex-1 justify-end"> --}}
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link text-black" href="{{ route('login') }}">Log in</a>
                                        </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link text-black" href="{{ route('register')}}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            {{-- </nav> --}}
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    {{-- Search section --}}
    <div class="row search-section justify-content-center">

            <div class="col-9 search-bar">
                <form class="search-form" role="search" action="" method="">
                    @csrf
                <div class="row">
                    <div class="col-md-12 search-title text-center ">
                        <h1>Find your next abode</h1>
                    </div>
                </div>

                <div class="row gx-2 category-radio">
                    <div class="col-md-3  ">
                        <input type="radio" class="btn-check  " name="category" id="buy" autocomplete="off" value="Buy" checked>
                        <label class="btn  category-selection" for="buy">Buy</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="category" id="rent" value="Rent" autocomplete="off">
                        <label class="btn category-selection" for="rent">Rent</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="category" id="shortlet" value="Shortlet" autocomplete="off" >
                        <label class="btn category-selection" for="shortlet">Shortlet</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="category" id="land" value="Land" autocomplete="off">
                        <label class="btn category-selection" for="land">Land</label>
                    </div>
                </div>

                    <div class="row g-0">
                        <div class="col-md-4 ">
                        <input class="form-control search-option" type="search" placeholder="Where's your dream house" aria-label="Search">
                        </div>
                        <div class="col-md-2">
                            <select name="type" id="" class="form-control search-option">
                                <option value="type">Type</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="bed" id="" class="form-control search-option">
                                <option value="bed">Bed</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="minprice" id="" class="form-control search-option">
                                <option value="Min Price">Min Price</option>
                            </select>
                        </div>
                        <div class="col-md-2 ">
                            <select name="maxprice" id="" class="form-control search-option">
                                <option value="Max Price">Max Price</option>
                            </select>
                        </div>
                        <div class="col-md-4 search-btn ms-auto">
                            <button class="btn btn-outline-success btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i> &nbsp; Search</button>
                        </div>

                    </div>

                </form>
            </div>
    </div>

    <div class="row justify-content-center property-section">
        <div class="col-10">
            <h5 class="bold-purple mb-5 ps-5">Featured Properties</h5>
        </div>

        <div class="col-md-5 col-lg-3">
            <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
        </div>
        <div class="col-md-5 col-lg-3">
            <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
        </div>
        <div class="col-md-5 col-lg-3">
            <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
        </div>
    </div>

    {{-- bottom nav --}}
    {{-- @include('partials/bottom-nav') --}}
    <div class="row bottom-nav ">
        <div class="col-md-2">
            <a class="navbar-brand ps-5 bold-white" href=""><i class="fa-solid fa-city"></i>&nbsp;CityNest</a>
        </div>
        <div class="col-lg-2 bottom-nav-col">
            <a href="#" class="bold-white">About Us</a>
        </div>
        <div class="col-lg-1 bottom-nav-col">
            <a href="#" class="bold-white">Contact</a>
        </div>
        <div class="col-lg-1 bottom-nav-col">
            <a href="#" class="bold-white">Agent</a>
        </div>
        <div class="col-lg-2 bottom-nav-col ms-auto advertise ">
            <a href="#" class="bold-white btn btn-outline-warning">Advertise With Us</a>
        </div>
    </div>


    {{-- footer --}}
    {{-- @include('partials/footer') --}}
    <div class="row footer justify-content-start">
        <div class="col-lg-3 col-md-6">
            <p class="bold footer-title">Featured Properties</p>
            <ul>
                <li>Project 1</li>
                <li>Project 1</li>
                <li>Project 1</li>
                <li>Project 1</li>
                <li>Project 1</li>
                <li>Project 1</li>
                <li>Project 1</li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-6">
            <p class="bold footer-title">Popular States</p>
            <ul>
                <li>Lagos</li>
                <li>Ibadan </li>
                <li>Abuja </li>
                <li>Ogun </li>
                <li>Porthacourt </li>
                <li>Abia </li>
                <li>Kano </li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-6">
            <p class="bold footer-title">Popular Cities</p>
            <ul>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-6">
            <p class="bold footer-title">Popular States</p>
            <ul>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-6">
            <p class="bold footer-title">Popular Shortlet Cities</p>
            <ul>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
            </ul>
        </div>
        <div class="col-lg-1 col-md-6">
            <p class="bold footer-title">Popular Land</p>
            <ul>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
                <li>Project</li>
            </ul>
        </div>
    </div>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
