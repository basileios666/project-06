<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mentor Hub </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Dancing+Script&family=Holtwood+One+SC&family=Lobster&family=Monoton&family=Montserrat:ital,wght@0,100;0,200;1,100&family=Ms+Madi&family=Satisfy&family=Shadows+Into+Light&family=Square+Peg&family=Staatliches&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Dancing+Script&family=Holtwood+One+SC&family=Lobster&family=Monoton&family=Montserrat:ital,wght@0,100;0,200;1,100&family=Ms+Madi&family=Satisfy&family=Shadows+Into+Light&family=Square+Peg&family=Staatliches&display=swap"
        rel="stylesheet">



    <!-- Favicon -->
    <link href="https://www.nicepng.com/png/full/11-118527_m-infoline-logo-m-orange.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block ">
        <div class="row align-items-center py-1 px-xl-5">
            <div id="top" class="col-lg-3">
                <a href="/" class="text-decoration-none">
                    <h2 class="m-0"><span>

                            <span class="text-primary"
                                style="font-family: 'Bungee Inline', cursive;">MENTOR</span></span>HUB</h2>

                    </h2>
                </a>
            </div>

            <div class="col-lg-9 ">

                <nav   class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 ">
                    <a  href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">MENTOR</span>HUB</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
           
                    
                    <div class="p-1 collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class=" navbar-nav py-1 px-5 ">
                            <a  style="margin-top: 30px" href="/" class="nav-item nav-link "><h5>Home</h5></a>
                            <a  style="margin-top: 30px" href="{{ route('profile.index') }}" class="nav-item nav-link "><h5>Mentors</h5></a>
                             <a  style="margin-top: 30px" href="{{ route('posts.index') }}" class="nav-item nav-link "><h5>Ask</h5></a>
                            <a  style="margin-top: 30px" href="/#about" class="nav-item nav-link "><h5>About</h5></a>
                            <a  style="margin-top: 30px" href="#contact" class="nav-item nav-link "><h5>Contact</h5></a>

                            <!-- Right Side Of Navbar -->
                            <ul style="margin-top: 17px;"  class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li  class="nav-item">
                                            <a style="margin-top: 12px" class="nav-link "
                                                href="{{ route('login') }}"><h5>{{ __('Sign in') }}</h5></a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a style="margin-top: 12px" class="nav-link"
                                                href="{{ route('register') }}"><h5>{{ __('Join us') }}</h5></a>
                                        </li>
                                    @endif
                                @else
                                
                                    <li style="margin-top: 15px;" class="nav-item ">
                                    <li style="margin-top: 15px" class="nav-item ">
                             
                                    <li style="margin-top: 15px;" class="nav-item ">
                                    <li style="margin-top: 25px;margin-left: 10px" class="nav-item ">
                                        <div class="nav-item dropdown">
                                            <button style="text-transform: uppercase;" class="btn btn-outline-primary ml-2 dropdown-toggle"
                                                class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __(Auth::user()->name) }}
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('profile.edit', Auth::user()->id) }}">My profile</a>
                                                <a class="dropdown-item" style="color: #ff6600c2 "
                                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>

                                    {{-- <a class="nav-link " href="{{ route('profile.edit',Auth::user()->id) }}"
                                    role="button">
                                    {{ __(Auth::user()->name)}}
                                </a> --}}



                                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                                    {{-- <li class="nav-item">
                                        <a style="color: #ff6600af " class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li> --}}

                                @endguest
                            
                            </ul>

                        </div>
                        {{-- <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Join Now</a> --}}
                    </div>

                </nav>
            </div>

            

        </div>
    </div>
    <!-- Topbar End -->





    <div>
        @yield('content')
    </div>


    <!-- Footer Start -->
    <div id="contact" class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Irbid, Jordan</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+9627777777</p>
                        <p><i class="fa fa-envelope mr-2"></i>Mentor@Hub.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="{{ route('profile.index') }}"><i class="fa fa-angle-right mr-2"></i>Mentors</a>
                            <a class="text-white mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Ask</a>
                           
                            <a class="text-white mb-2" href=""><i class="fa fa-angle-right mr-2"></i>About</a>

                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Subscribe to our newsletter</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important; ">
        <div class="row">
            <div class="col-lg-12 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white text-center">&copy; <a href="">Mentor Hub</a>. All Rights Reserved. Designed
                    by <a href=" ">Mentor Hub Team</a>
                </p>
            </div>
            <!-- <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top btn btn-lg btn-primary btn-lg-square "><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>


</body>

</html>
