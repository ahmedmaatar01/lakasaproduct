<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


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

                <!-- ==================== Start Slider ==================== -->

                <header class="slider showcase-full">
                    <div class="swiper-container parallax-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-img valign"
                                    data-background="{{ asset('storage/' . $content->slider_image_1) }}"
                                    data-overlay-dark="3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11 offset-lg-1">
                                                <div class="caption">
                                                    <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023
                                                        <br>
                                                        Branding
                                                    </h6>
                                                    <h1>
                                                        <a href="">
                                                            <span
                                                                data-swiper-parallax="-2000">{{ $content->slider_title_1 }}</span>
                                                        </a>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-img valign"
                                    data-background="{{ asset('storage/' . $content->slider_image_2) }}"
                                    data-overlay-dark="3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11 offset-lg-1">
                                                <div class="caption">
                                                    <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023
                                                        <br>
                                                        Branding
                                                    </h6>
                                                    <h1>
                                                        <a href="project-details1.html">
                                                            <span
                                                                data-swiper-parallax="-2000">{{ $content->slider_title_2 }}</span>
                                                        </a>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-img valign"
                                    data-background="{{ asset('storage/' . $content->slider_image_3) }}"
                                    data-overlay-dark="3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-11 offset-lg-1">
                                                <div class="caption">
                                                    <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023
                                                        <br>
                                                        Branding
                                                    </h6>
                                                    <h1>
                                                        <a href="project-details1.html">
                                                            <span
                                                                data-swiper-parallax="-2000">{{ $content->slider_title_3 }}</span>
                                                        </a>
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- slider setting -->
                        <div class="slider-contro">
                            <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                                <div>
                                    <span>Next Slide</span>
                                </div>
                                <div><i class="fas fa-chevron-right"></i></div>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                                <div><i class="fas fa-chevron-left"></i></div>
                                <div>
                                    <span>Prev Slide</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination dots"></div>
                    </div>
                </header>

                <!-- ==================== End Slider ==================== -->



                <!-- ==================== Start about ==================== -->

                <section id="formes" class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="">
                                    <div class="o-hidden">
                                        <div class="imago wow">
                                            <img src="{{ asset('storage/' . $content->image_1) }}"
                                                alt="img pour forme">
                                        </div>
                                        <p class="text-center">{{ $content->label_1 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="">
                                    <div class="o-hidden">
                                        <div class="imago wow">
                                            <img src="{{ asset('storage/' . $content->image_2) }}"
                                                alt="img pour forme">
                                        </div>
                                        <p class="text-center">{{ $content->label_2 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="">
                                    <div class="o-hidden">
                                        <div class="imago wow">
                                            <img src="{{ asset('storage/' . $content->image_3) }}"
                                                alt="img pour forme">
                                        </div>
                                        <p class="text-center">{{ $content->label_3 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="">
                                    <div class="o-hidden">
                                        <div class="imago wow">
                                            <img src="{{ asset('storage/' . $content->image_4) }}"
                                                alt="img pour forme">
                                        </div>
                                        <p class="text-center">{{ $content->label_4 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <section class="about-intro section-padding">
                    <div class="container">
                        <div class="row mb-80">
                            <div class="col-lg-5">
                                <div class="sec-lg-head">
                                    <h6 class="dot-titl-non mb-15 wow fadeIn">OUR BENEFITS</h6>
                                    <h2 class="d-rotate wow">
                                        <span class="rotate-text">Our Team of Dedicated Digital Professionals.</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-2 valign">
                                <div class="text">
                                    <p class="d-slideup wow">
                                        <span class="sideup-text">
                                            <span class="up-text">Through our years of experience, we’ve also learned
                                                that while</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text">each channel has its own set of advantages, they all
                                                work best</span>
                                        </span>
                                        <span class="sideup-text">
                                            <span class="up-text">when strategically paired with other channels.</span>
                                        </span>
                                    </p>
                                    <div class="vew-all mt-50 ml-30 wow fadeIn" data-wow-delay=".8s">
                                        <a href="blog-classic.html">View All Our News
                                            <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-6 rest">
                                <div class="imgs">
                                    <div class="img1">
                                        <div class="o-hidden">
                                            <div class="imago wow">
                                                <img src="{{ asset('storage/' . $content->section_image_1) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img2">
                                        <div class="o-hidden">
                                            <div class="imago wow">
                                                <img src="{{ asset('template-front/assets/imgs/about/1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 valign rest">
                                <div class="cont">
                                    <h2 class="d-rotate wow">
                                        <span class="rotate-text">{{ $content->section_title_1 }}</span>
                                    </h2>
                                    <div class="feat mt-80">
                                        <div class="item-flex d-flex align-items-center mb-50 wow fadeIn"
                                            data-wow-delay=".4s">

                                            <div class="cont ml-30">
                                                <p class="fz-15">{{ $content->section_paragraph_1 }}
                                                </p>
                                                <div class=" d-flex align-items-center mt-30">
                                                    <div class="full-width d-flex ">
                                                        <div class="vew-all">
                                                            <a href="#">View All Our News
                                                                <span>
                                                                    <svg width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End about ==================== -->



                <!-- ==================== Start marq ==================== -->

                <section class="marquee">
                    <div class="container-fluid rest">
                        <div class="row">
                            <div class="col-12">
                                <div class="main-marq">
                                    <div class="slide-har st1">
                                        <div class="box non-strok">
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Mirroirs Led</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Mirroirs</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                            <div class="item">
                                                <h4 class="d-flex align-items-center"><span>Mirroirs Salon de
                                                        Coiffure</span>
                                                    <span class="fz-50 ml-50 stroke icon">*</span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End marq ==================== -->



                <!-- ==================== Start brands ==================== -->

                <div class="clients-carso2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true"
                                    data-space="40">
                                    <div id="content-carousel-container-unq-clients" class="swiper-container"
                                        data-swiper="container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img icon-img-100">
                                                        <a href="#0">
                                                            <img src="{{ asset('template-front/assets/imgs/brands/01.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img icon-img-100">
                                                        <a href="#0">
                                                            <img src="{{ asset('template-front/assets/imgs/brands/02.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img icon-img-100">
                                                        <a href="#0">
                                                            <img src="{{ asset('template-front/assets/imgs/brands/03.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img icon-img-100">
                                                        <a href="#0">
                                                            <img src="{{ asset('template-front/assets/imgs/brands/04.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img icon-img-100">
                                                        <a href="#0">
                                                            <img src="{{ asset('template-front/assets/imgs/brands/05.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== End brands ==================== -->



                <!-- ==================== Start Services ==================== -->

                <section class="serv-box section-padding pb-0">
                    <div class="container">
                        <div class="sec-lg-head mb-80">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="position-re">
                                        <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Services</h6>
                                        <h2 class="d-rotate wow">
                                            <span class="rotate-text">Our Services</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex align-items-center">
                                    <div class="text wow fadeIn">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cont">
                                    <h2 class="d-rotate wow">
                                        <span class="rotate-text">{{ $content->section_title_2 }}</span>
                                    </h2>
                                    <div class="feat mt-80">
                                        <div class="item-flex d-flex align-items-center mb-50 wow fadeIn"
                                            data-wow-delay=".4s">

                                            <div class="cont ml-30">
                                                <p class="fz-15">{{ $content->section_paragraph_2 }}
                                                </p>
                                                <div class=" d-flex align-items-center mt-30">
                                                    <div class="full-width d-flex ">
                                                        <div class="vew-all">
                                                            <a href="#">View All Our News
                                                                <span>
                                                                    <svg width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="o-hidden">
                                    <div class="imago wow">
                                        <img src="{{ asset('storage/' . $content->section_image_2) }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Services ==================== -->



                <!-- ==================== Start section ==================== -->

                <section class="works thecontainer">

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/01.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>Color Integration</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/02.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>Mobile Software</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/03.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>New Gadgets</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/04.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>Digital Platform</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/05.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>Branding Process</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                    <div class="panel mt-30">
                        <div class="item">
                            <div class="img">
                                <img src="{{ asset('template-front/assets/imgs/portfolio/4/06.jpg') }}"
                                    alt="">
                            </div>
                            <div class="cont d-flex align-items-end">
                                <div>
                                    <span>Web Design</span>
                                    <h5>Branding Process</h5>
                                </div>
                                <div class="ml-auto">
                                    <h6>2023</h6>
                                </div>
                            </div>
                            <a href="#0" class="link-overlay"></a>
                        </div>
                    </div>

                </section>

                <!-- ==================== End section ==================== -->



                <!-- ==================== Start services tabs ==================== -->

                <section class="services-tab revers section-padding pt-0">
                    <div class="container">
                        <div class="row mb-80">
                            <div class="col-lg-12">
                                <div class="full-width">
                                    <div class="main-marq o-hidden pt-40 pb-40 bord-thin-top bord-thin-bottom">
                                        <div class="slide-har st1">
                                            <div class="box">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="box">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center fz-70"><span>Amazing
                                                            Design</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" id="tabs">
                            <div class="col-lg-5 valign">
                                <div class="serv-tab-link tab-links full-width md-mb50">
                                    <div class="sec-lg-head mb-80 wow fadeIn">
                                        <h6 class="dot-titl-non mb-15">Services</h6>
                                        <p>We help you to go online and increase your conversion rate Better design for
                                            your
                                            digital products. </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <ul class="rest">
                                                <li class="item-link current mb-15 pb-15 bord-thin-bottom"
                                                    data-tab="tabs-1"><span>01</span> UI/UX
                                                    Design</li>
                                                <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-2">
                                                    <span>02</span> Branding
                                                </li>
                                                <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-3">
                                                    <span>03</span> Development
                                                </li>
                                                <li class="item-link" data-tab="tabs-4"><span>04</span> Marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="serv-tab-cont">
                                    <div class="tab-content current" id="tabs-1">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/sass-img/serv/4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont sub-bg">
                                                <div class="icon-img-60 mb-40">
                                                    <img src="{{ asset('template-front/assets/imgs/serv-icons/0.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">
                                                    <p>We are a creative studio specializing in design,
                                                        development and strategy many different skills and disciplines
                                                        in the
                                                        production of all web.</p>
                                                </div>
                                                <a href="page-services.html" class="mt-30">
                                                    <span class="mr-15">Read More</span>
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                                <div class="bg-pattern bg-img"
                                                    data-background="{{ asset('template-front/assets/imgs/patterns/abstact-BG.png') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="tabs-2">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/sass-img/serv/2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont sub-bg">
                                                <div class="icon-img-60 mb-40">
                                                    <img src="{{ asset('template-front/assets/imgs/serv-icons/1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">
                                                    <p>We are a creative studio specializing in design,
                                                        development and strategy many different skills and disciplines
                                                        in the
                                                        production of all web.</p>
                                                </div>
                                                <a href="page-services.html" class="mt-30">
                                                    <span class="mr-15">Read More</span>
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="tabs-3">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/sass-img/serv/3.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont sub-bg">
                                                <div class="icon-img-60 mb-40">
                                                    <img src="{{ asset('template-front/assets/imgs/serv-icons/2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">
                                                    <p>We are a creative studio specializing in design,
                                                        development and strategy many different skills and disciplines
                                                        in the
                                                        production of all web.</p>
                                                </div>
                                                <a href="page-services.html" class="mt-30">
                                                    <span class="mr-15">Read More</span>
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="tabs-4">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/sass-img/serv/1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="cont sub-bg">
                                                <div class="icon-img-60 mb-40">
                                                    <img src="{{ asset('template-front/assets/imgs/serv-icons/0.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="text">
                                                    <p>We are a creative studio specializing in design,
                                                        development and strategy many different skills and disciplines
                                                        in the
                                                        production of all web.</p>
                                                </div>
                                                <a href="page-services.html" class="mt-30">
                                                    <span class="mr-15">Read More</span>
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End services tabs ==================== -->



                <!-- ==================== Start testimonails ==================== -->

                <section class="testim-crv2 section-padding sub-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="sec-lg-head mb-80">
                                    <div class="position-re text-center">
                                        <h6 class="dot-titl-non mb-15 wow fadeIn">Testimonials</h6>
                                        <h2 class="d-rotate wow">
                                            <span class="rotate-text">What People Says?</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 position-re wow fadeIn" data-wow-delay=".4s">
                                <div class="bord-qoute d-flex align-items-center justify-content-center">
                                    <div class="qoute-icon main-bg">
                                        <img src="{{ asset('template-front/assets/imgs/svg-assets/quote.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="img-qoute">
                                    <img src="{{ asset('template-front/assets/imgs/about/sq1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 wow fadeIn" data-wow-delay=".4s">
                                <div class="testim-swiper" data-carousel="swiper" data-items="1" data-loop="true"
                                    data-space="30">
                                    <div id="content-carousel-container-unq-testim" class="swiper-container"
                                        data-swiper="container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="cont mb-40">
                                                        <div class="rate-stars mb-20 fz-16">
                                                            <span class="rate main-color4">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <h5 class="fw-400">I have been hiring people in this
                                                            space for a number of years
                                                            and I have never seen this level of
                                                            professionalism. It really feels like you are
                                                            working with a team that can get the job
                                                            done.</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="img circle-60">
                                                                <img src="{{ asset('template-front/assets/imgs/testim/1.jpg') }}"
                                                                    alt="" class="circle-img">
                                                            </div>
                                                        </div>
                                                        <div class="ml-30">
                                                            <div class="info">
                                                                <h6 class="fz-16">Leonard Heiser</h6>
                                                                <span class="opacity-7 sub-title">Ceo</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="cont mb-40">
                                                        <div class="rate-stars mb-20 fz-16">
                                                            <span class="rate main-color4">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </div>
                                                        <h5 class="fw-400">I have been hiring people in this
                                                            space for a number of years
                                                            and I have never seen this level of
                                                            professionalism. It really feels like you are
                                                            working with a team that can get the job
                                                            done.</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <div class="img circle-60">
                                                                <img src="{{ asset('template-front/assets/imgs/testim/2.jpg') }}"
                                                                    alt="" class="circle-img">
                                                            </div>
                                                        </div>
                                                        <div class="ml-30">
                                                            <div class="info">
                                                                <h6 class="fz-16">Leonard Heiser</h6>
                                                                <span class="opacity-7 sub-title">Ceo</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="swiper-controls testim-controls arrow-out d-flex ml-auto">
                                        <div class="swiper-button-prev">
                                            <span class="left">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="swiper-button-next ml-50">
                                            <span class="right">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="numbers mt-80 pt-80 bord-thin-top wow fadeIn" data-wow-delay=".4s">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="item md-mb50">
                                        <h2 class="fw-800 stroke">16</h2>
                                        <h6>Years of Experience</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                                    <div class="item md-mb50">
                                        <h2 class="fw-800">4<span class="fz-80 fw-600">k</span></h2>
                                        <h6>Projects Complated</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                                    <div class="item sm-mb50">
                                        <h2 class="fw-800 stroke">9<span class="fz-80 fw-600">k</span></h2>
                                        <h6>Happy Customers</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex">
                                    <div class="item ml-auto">
                                        <h2 class="fw-800">12</h2>
                                        <h6>Awards Winning</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End testimonails ==================== -->



                <!-- ==================== Start Blog ==================== -->

                <section class="blog-list-half crev section-padding">
                    <div class="container">
                        <div class="sec-lg-head mb-80">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="dot-titl-non mb-15 wow fadeIn">Our Blog</h6>
                                    <h2 class="d-rotate wow">
                                        <span class="rotate-text">Latest News.</span>
                                    </h2>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="full-width d-flex justify-content-end justify-end">
                                        <div class="vew-all">
                                            <a href="blog-list.html">View All Our News
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row wow fadeIn" data-wow-delay=".4s">
                            <div class="col-lg-6">
                                <div class="item md-mb80">
                                    <div class="row rest">
                                        <div class="col-md-6">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/blog/h1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 valign">
                                            <div class="cont">
                                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                                    2022</span>
                                                <h5>
                                                    <a href="blog-details.html">Free advertising for your online
                                                        business.</a>
                                                </h5>
                                                <div class="tags colorbg mt-15">
                                                    <a href="blog-half-img.html">Marketing</a>
                                                    <a href="blog-half-img.html">Design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <div class="row rest">
                                        <div class="col-md-6">
                                            <div class="img">
                                                <img src="{{ asset('template-front/assets/imgs/blog/h4.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 valign">
                                            <div class="cont">
                                                <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                                    2022</span>
                                                <h5>
                                                    <a href="blog-details.html">Business meeting 2023 in San
                                                        Francisco.</a>
                                                </h5>
                                                <div class="tags colorbg mt-15">
                                                    <a href="blog-half-img.html">Marketing</a>
                                                    <a href="blog-half-img.html">Design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Blog ==================== -->


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
    <script src="{{ asset('template-front/assets/js/hscroll.js') }}"></script>
    <script src="{{ asset('template-front/assets/js/smoother-script.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('template-front/assets/js/scripts.js') }}"></script>


</body>



</html>
