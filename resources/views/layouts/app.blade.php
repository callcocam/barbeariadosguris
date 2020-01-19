<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">{{ $tenant->name }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="hairstyle.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Haircut</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="hairstyle.html">Crew Cut</a>
                                <a class="dropdown-item" href="hairstyle.html">Regular Hair Cut</a>
                                <a class="dropdown-item" href="hairstyle.html">Shampoo + Cut</a>
                                <a class="dropdown-item" href="hairstyle.html">Beard Trim with Razor</a>
                                <a class="dropdown-item" href="hairstyle.html">Hair Color</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.admin.index') }}">{{ __('Admin') }}</a>
                                    <a class="dropdown-item" href="{{ route('admin.auth.profile.index') }}">{{ __('Profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.admin.index') }}">{{ __('Admin') }}</a>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')




    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="mb-4">About</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
                    <ul class="list-unstyled ">
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">34 Street Name, City Name Here, United States</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">+1 242 4942 290</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">info@yourdomain.com</span></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3 class="mb-4">Links</h3>
                    <ul class="list-unstyled ">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Hairstyle</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Latest Blog</h3>
                    <ul class="list-unstyled blog-entry-footer">
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>7 Best Destination in The World</h3></a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>4 Hour Work Week And The Rest Is Travel</h3></a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>Why You Should Travel Today</h3></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Connect</h3>
                    <p>
                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>

    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
