<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lakasa product</title>


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

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('template-front/assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('template-front/assets/css/style.css') }}">

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
            <h1>content here</h1>
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
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
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
                <a class="logo icon-img-100" href="#">
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
                                aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Home</span></a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Home Dark</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-main.html">Main
                                                        Home</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-corporate.html">Corporate
                                                        Business</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-onepage.html">Home
                                                        One page</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-digital-agency.html">Digital
                                                        Agency</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-freelancer.html">Freelancer</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-marketing-agency.html">Marketing
                                                        Agency</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-creative-agency.html">Creative
                                                        Agency</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-startup.html">Startup
                                                        Bussines</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/home-architecture.html">Architecture</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Home Light</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item" href="home-main.html">Main Home</a>
                                                    <a class="dropdown-item" href="home-corporate.html">Corporate
                                                        Business</a>
                                                    <a class="dropdown-item" href="home-onepage.html">Home One
                                                        page</a>
                                                    <a class="dropdown-item" href="home-digital-agency.html">Digital
                                                        Agency</a>
                                                    <a class="dropdown-item"
                                                        href="home-freelancer.html">Freelancer</a>
                                                    <a class="dropdown-item"
                                                        href="home-marketing-agency.html">Marketing
                                                        Agency</a>
                                                    <a class="dropdown-item" href="home-creative-agency.html">Creative
                                                        Agency</a>
                                                    <a class="dropdown-item" href="home-startup.html">Startup
                                                        Bussines</a>
                                                    <a class="dropdown-item"
                                                        href="home-architecture.html">Architecture</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Showcases</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-parallax-slider.html">Parallax
                                                        Slider</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-frame-slider.html">Frame
                                                        Slider</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-circle-slider.html">Circle
                                                        Slider</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-carousel.html">Showcase
                                                        Carousel</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-interactive-center-horizontal.html">Interactive
                                                        Links1</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-interactive-center.html">Interactive
                                                        Links2</a>
                                                    <a class="dropdown-item"
                                                        href="https://uithemez.com/i/geekfolio/dark/showcase-parallax.html">Vertical
                                                        Parallax</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="clumn">
                                                <div class="title">
                                                    <h6 class="sub-title ls1">Showcases Light</h6>
                                                </div>
                                                <div class="links">
                                                    <a class="dropdown-item"
                                                        href="showcase-parallax-slider.html">Parallax
                                                        Slider</a>
                                                    <a class="dropdown-item" href="showcase-carousel.html">Showcase
                                                        Carousel</a>
                                                    <a class="dropdown-item"
                                                        href="showcase-interactive-center-horizontal.html">Interactive
                                                        Links1</a>
                                                    <a class="dropdown-item"
                                                        href="showcase-interactive-center.html">Interactive Links2</a>
                                                    <a class="dropdown-item" href="showcase-parallax.html">Vertical
                                                        Parallax</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="rolling-text">Pages</span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="page-about.html">About</a>
                                <a class="dropdown-item" href="page-services.html">Services</a>
                                <a class="dropdown-item" href="page-team.html">Our Team</a>
                                <a class="dropdown-item" href="page-contact.html">Contact Us</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="rolling-text">Portfolio</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="#0">Classic Grid <i class="fas fa-angle-right icon-arrow"></i></a>
                                    <ul class="dropdown-side">
                                        <li><a class="dropdown-item" href="portfolio-grid-2.html">Grid 2 Columns</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-3.html">Grid 3 Columns</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-4.html">Grid 4 Columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#0">Masonry <i class="fas fa-angle-right icon-arrow"></i></a>
                                    <ul class="dropdown-side">
                                        <li><a class="dropdown-item" href="portfolio-masonry-2.html">Masonry 2
                                                Columns</a></li>
                                        <li><a class="dropdown-item" href="portfolio-masonry-3.html">Masonry 3
                                                Columns</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-masonry-4.html">Masonry 4
                                                Columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-metro.html">Portfolio Metro</a></li>
                                <li><a class="dropdown-item" href="portfolio-modern.html">Modern Grid</a></li>
                                <li><a class="dropdown-item" href="project-details1.html">Project Details 1</a></li>
                                <li><a class="dropdown-item" href="project-details2.html">Project Details 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="rolling-text">Blogs</span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog-classic.html">Blog Standerd</a>
                                <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                <a class="dropdown-item" href="blog-half-img.html">Image Out Frame</a>
                                <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Shop</span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                <a class="dropdown-item" href="shop-product.html">Single Product</a>
                                <a class="dropdown-item" href="shop-cart.html">Cart</a>
                                <a class="dropdown-item" href="shop-checkout.html">Checkout</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-contact.html"><span
                                    class="rolling-text">Contact</span></a>
                        </li>
                    </ul>
                </div>
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
                <div class="search-form">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Search">
                        <button><span class="pe-7s-search"></span></button>
                    </div>

                    <div class="search-icon">
                        <span class="pe-7s-search open-search"></span>
                        <span class="pe-7s-close close-search"></span>
                    </div>
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
