<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lakasa product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('template-front/assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('template-front/assets/css/style.css') }}">

    <!-- custom inputs Css -->
    <link rel="stylesheet" href="{{ asset('template-front/assets/css/custom-inputs.css') }}">


</head>

<body class="home-main-crev main-bg">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">

        </div>

    </div>



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>a</span>
                <span> </span>
                <span>k</span>
                <span>a</span>
                <span>s</span>
                <span>a</span>
                <span> </span>
                <span>p</span>
                <span>r</span>
                <span>o</span>
                <span>d</span>
                <span>u</span>
                <span>c</span>
                <span>t</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <div id="smooth-wrapper">

        <!-- ==================== Start Navbar ==================== -->

        <nav class="navbar navbar-expand-lg bord main-bg">
            <div class="container">

                <!-- Logo -->
                <a class="logo icon-img-100" href="{{ route('home.index') }}">
                    <img src="{{ asset('template-front/assets/imgs/logo-dark.png') }}" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Miroir</span></a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Formes</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'rectangulaire', 'mirroir' => 'simple']) }}">Rectangulaire</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'rond', 'mirroir' => 'simple']) }}">Rond</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'semi ovale', 'mirroir' => 'simple']) }}">Semi Ovale</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'abstraite', 'mirroir' => 'simple']) }}">Abstraite</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Styles</h6>
                                                </div>
                                                <div class="links">

                                                        <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index') }}">Miroir Encadré</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index') }}">Miroir Basique</a>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="image">
                                                    <img src="http://127.0.0.1:8000/storage/section_images/1l6Cqiv41vwb8kEVqBW3KJfcKEqaEwWWEOqOK3KR.gif"
                                                        alt="image du categorie">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Mirroir
                                    Led</span></a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Formes</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'rectangulaire', 'mirroir' => 'led']) }}">Rectangulaire</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'rond', 'mirroir' => 'led']) }}">Rond</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'semi ovale', 'mirroir' => 'led']) }}">Semi Ovale</a>
                                                    <a class="dropdown-item item-change-image-header"
                                                        href="{{ route('shop.index', ['forme' => 'abstraite', 'mirroir' => 'led']) }}">Abstraite</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Styles</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item item-change-image-header"
                                                    href="{{ route('shop.index', ['style_lumiere' => 'combiner', 'mirroir' => 'led']) }}">Lumière Combinée</a>
                                                <a class="dropdown-item item-change-image-header"
                                                    href="{{ route('shop.index', ['style_lumiere' => 'brillant', 'mirroir' => 'led']) }}">Lumière Brillante</a>
                                                <a class="dropdown-item item-change-image-header"
                                                    href="{{ route('shop.index', ['style_lumiere' => 'retro', 'mirroir' => 'led']) }}">Lumière Rétro</a>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="clumn">
                                                <div class="image">
                                                    <img src="http://127.0.0.1:8000/storage/section_images/1l6Cqiv41vwb8kEVqBW3KJfcKEqaEwWWEOqOK3KR.gif"
                                                        alt="image du categorie">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="rolling-text">Salon de
                                    coiffure</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}"><span
                                    class="rolling-text">Contact</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('b2b.index') }}"><span
                                    class="rolling-text">b2b</span></a>
                        </li>
                    </ul>
                </div>
                {{-- @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif --}}

                <!-- Profile Dropdown -->
                <div class="dropdown">
                    <a class=" dropdown-toggle pe-2" href="#" id="profileDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle" style="font-size: 24px; color:#fff;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                        @auth
                            <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>

                {{-- <div class="search-form">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Search">
                        <button><span class="pe-7s-search"></span></button>
                    </div>

                    <div class="search-icon">
                        <span class="pe-7s-search open-search"></span>
                        <span class="pe-7s-close close-search"></span>
                    </div>
                </div> --}}
                <div class="cart-icon">
                    <a href="{{ route('cart.index') }}">
                        <i class="fa-solid fa-cart-shopping"
                            style="position: relative;padding: 25px 30px;cursor: pointer;border-left: 1px solid #ffffff4f;border-right: 1px solid #ffffff4f;"></i>
                    </a>
                </div>
            </div>
        </nav>

        <!-- ==================== End Navbar ==================== -->

        <div id="smooth-content">

            <main class="main-bg">
                {{ $slot }}


            </main>


            <!-- ==================== Start Footer ==================== -->

            <footer class="sub-bg">
                <div class="footer-container">
                    <div class="container pb-80 pt-80 ontop">
                        <div class="call-box text-center mb-80">
                            <h2>
                                <a href="page-contact.html">Let's <span class="stroke"> Discuss</span></a>
                                <span class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="colum md-mb50">
                                    <div class="tit mb-20">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="text">
                                        <p>Germany — 785 15h Street, Office 478 Berlin, De 81566</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-lg-1">
                                <div class="colum md-mb50">
                                    <div class="tit mb-20">
                                        <h6>Say Hello</h6>
                                    </div>
                                    <div class="text">
                                        <p class="mb-10">
                                            <a href="#0">hello@design.com</a>
                                        </p>
                                        <h5>
                                            <a href="#">+1 840 841 25 69</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 md-mb50">
                                <div class="tit mb-20">
                                    <h6>Social</h6>
                                </div>
                                <ul class="rest social-text">
                                    <li>
                                        <a href="#0">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#0">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="#0">LinkedIn</a>
                                    </li>
                                    <li>
                                        <a href="#0">Instagram</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <div class="tit mb-20">
                                    <h6>Newsletter</h6>
                                </div>
                                <div class="subscribe">
                                    <form action="https://uithemez.com/i/geekfolio/light/contact.php">
                                        <div class="form-group rest">
                                            <input type="email" placeholder="Type Your Email">
                                            <button type="submit">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-footer pt-40 pb-40 bord-thin-top ontop">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="{{ asset('template-front/assets/imgs/logo-dark.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="copyright d-flex">
                                        <div class="ml-auto">
                                            <p class="fz-13">© 2023 Geekfolio is Proudly Powered by <span
                                                    class="underline"><a href="https://themeforest.net/user/ui-themez"
                                                        target="_blank">Ui-ThemeZ</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- ==================== End Footer ==================== -->


        </div>
    </div>







    <!-- jQuery -->
    <script src="{{ asset('template-front/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template-front/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('template-front/assets/js/plugins.js') }}"></script>

    <script src="{{ asset('template-front/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('template-front/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('template-front/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('template-front/assets/js/smoother-script.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('template-front/assets/js/scripts.js') }}"></script>




</body>



</html>
