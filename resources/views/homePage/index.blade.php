<x-front-layout>
    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset('storage/' . $content->slider_image_1) }}"
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
                                                <span data-swiper-parallax="-2000">{{ $content->slider_title_1 }}</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset('storage/' . $content->slider_image_2) }}"
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
                                                <span data-swiper-parallax="-2000">{{ $content->slider_title_2 }}</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset('storage/' . $content->slider_image_3) }}"
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
                                                <span data-swiper-parallax="-2000">{{ $content->slider_title_3 }}</span>
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

    <section id="formes" class="section-padding pt-50">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-15">
                    <h3>
                        Nos Formes
                    </h3>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <div class="o-hidden">
                            <div class="imago wow">
                                <img src="{{ asset('storage/' . $content->image_1) }}" alt="img pour forme">
                            </div>
                            <p class="text-center h5 pt-10">{{ $content->label_1 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <div class="o-hidden">
                            <div class="imago wow">
                                <img src="{{ asset('storage/' . $content->image_2) }}" alt="img pour forme">
                            </div>
                            <p class="text-center h5 pt-10">{{ $content->label_2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <div class="o-hidden">
                            <div class="imago wow">
                                <img src="{{ asset('storage/' . $content->image_3) }}" alt="img pour forme">
                            </div>
                            <p class="text-center h5 pt-10">{{ $content->label_3 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="">
                        <div class="o-hidden">
                            <div class="imago wow">
                                <img src="{{ asset('storage/' . $content->image_4) }}" alt="img pour forme">
                            </div>
                            <p class="text-center h5 pt-10">{{ $content->label_4 }}</p>
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
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
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
            <div class="row justify-content-center">
                <div class="col-lg-6 rest">
                    <div class="imgs">
                        <div class="img1">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{ asset('storage/' . $content->section_image_1) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="img2">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{ asset('template-front/assets/imgs/about/1.jpg') }}" alt="">
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
                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">

                                <div class="cont ml-30">
                                    <p class="fz-15">{{ $content->section_paragraph_1 }}
                                    </p>
                                    <div class=" d-flex align-items-center mt-30">
                                        <div class="full-width d-flex ">
                                            <div class="vew-all">
                                                <a href="#">View All Our News
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
                    <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true" data-space="40">
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

    <section class=" section-padding pb-0">
        <div class="container">

            <div class="button-group">
                <button id="btn1" class="home-custom-btn active"
                    onclick="changeImage('images/ih1.png', 'btn1')">Miroir
                    Lumière Brillante</button>
                <button id="btn2" class="home-custom-btn" onclick="changeImage('images/ih2.png', 'btn2')">miroir
                    Lumière Combinée</button>
                <button id="btn3" class="home-custom-btn" onclick="changeImage('images/ih3.png', 'btn3')">miroir
                    Lumière Rétro</button>
            </div>

            <div class="image-container px-5 pt-15" style="margin-top: 20px;">
                <img id="displayedImage" src="images/ih1.png" alt="Displayed Image"
                    style="max-width: 100%; height: auto;">
            </div>

        </div>
    </section>


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
                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">

                                <div class="cont ml-30">
                                    <p class="fz-15">{{ $content->section_paragraph_2 }}
                                    </p>
                                    <div class=" d-flex align-items-center mt-30">
                                        <div class="full-width d-flex ">
                                            <div class="vew-all">
                                                <a href="#">View All Our News
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

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="o-hidden">
                        <div class="imago wow">
                            <img src="{{ asset('storage/' . $content->section_image_2) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


    <!-- ==================== Start section products==================== -->

    <section class="main-shop section-padding">
        <div class="container">
            <div class="row md-marg">

                <div class="">
                    <div class="shop-products">
                        <h2 class="d-rotate wow animated" style="visibility: visible;">
                            <span class="rotate-text text-center pb-5">Produits Mis En Avant</span>
                        </h2>
                        <div class="row">
                            @forelse ($products as $product)
                                <div class="col-md-4">
                                    <div class="item mb-50">
                                        <div class="img">
                                            <img src="{{ asset('storage/' . $product->featuredImage->image_path) }}"
                                                alt="{{ $product->name }}" width="50">
                                            <a href="{{ route('singleproduct.index', $product->id) }}"
                                                class="add-cart">Savoir Plus</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <h6>{{ $product->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h6>No products found.</h6>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End section products ==================== -->



    <!-- ==================== Start services tabs ==================== -->

    <section class="services-tab revers section-padding pt-0 serv-box">
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
            <div class="cartes-produit">
                <div class="row">
                    <div class="col-lg-3 mb-15">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <!-- Front Side -->
                                <div class="flip-card-front sub-bg serv-item md-mb50 radius-10">
                                    <div class="icon-img-50 mb-10">
                                        <img src="{{ asset('images/assistance.svg') }}" class="icon-white"
                                            alt="Assistance Icon">
                                    </div>
                                    <h6 class="mb-30 pb-30 bord-thin-bottom">Assistance Rapide</h6>
                                    <p class="text-center">Nous vous offrons un service sur mesure, en vous conseillant
                                        à chaque étape pour choisir le miroir qui correspond parfaitement à vos besoins.
                                    </p>
                                </div>
                                <!-- Back Side -->
                                <div class="flip-card-back">
                                    <img src="{{ asset('images/9.webp') }}" alt="Assistance Image"
                                        style="width: 100%; height: 100%; border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-15">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <!-- Front Side -->
                                <div class="flip-card-front sub-bg serv-item md-mb50 radius-10">
                                    <div class="icon-img-50 mb-10">
                                        <img src="{{ asset('images/livraison.svg') }}" class="icon-white"
                                            alt="Livraison Icon">
                                    </div>
                                    <h6 class="mb-30 pb-30 bord-thin-bottom">Livraison</h6>
                                    <p class="text-center">Nous assurons une livraison rapide et fiable, avec des
                                        délais allant de 7 à 20 jours ouvrables selon le modèle sélectionné, tout en
                                        garantissant un service de haute qualité.</p>
                                </div>
                                <!-- Back Side -->
                                <div class="flip-card-back">
                                    <img src="{{ asset('images/9.webp') }}" alt="Livraison Image"
                                        style="width: 100%; height: 100%; border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-15">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <!-- Front Side -->
                                <div class="flip-card-front sub-bg serv-item radius-10">
                                    <div class="icon-img-50 mb-10">
                                        <img src="{{ asset('images/fix.svg') }}" class="icon-white"
                                            alt="Fixation Icon">
                                    </div>
                                    <h6 class="mb-30 pb-30 bord-thin-bottom">Installation Simple</h6>
                                    <p class="text-center">Nos miroirs, équipés d'un système d'installation avancé,
                                        permettent une pose rapide et sécurisée grâce à des supports préinstallés et des
                                        fixations robustes.</p>
                                </div>
                                <!-- Back Side -->
                                <div class="flip-card-back">
                                    <img src="{{ asset('images/9.webp') }}" alt="Installation Image"
                                        style="width: 100%; height: 100%; border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-15">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <!-- Front Side -->
                                <div class="flip-card-front sub-bg serv-item radius-10">
                                    <div class="icon-img-50 mb-10">
                                        <img src="{{ asset('images/garantie.svg') }}" class="icon-white"
                                            alt="Garantie Icon">
                                    </div>
                                    <h6 class="mb-30 pb-30 bord-thin-bottom">Garantie et Suivi</h6>
                                    <p class="text-center">Tous nos miroirs sont couverts par une garantie, et nous
                                        assurons un suivi après-vente attentif pour assurer votre satisfaction sur le
                                        long terme.</p>
                                </div>
                                <!-- Back Side -->
                                <div class="flip-card-back">
                                    <img src="{{ asset('images/9.webp') }}" alt="Garantie Image"
                                        style="width: 100%; height: 100%; border-radius: 10px;">
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
                            <img src="{{ asset('template-front/assets/imgs/svg-assets/quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="img-qoute">
                        <img src="{{ asset('template-front/assets/imgs/about/sq1.jpg') }}" alt="">
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
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="swiper-button-next ml-50">
                                <span class="right">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
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
            <div class="row wow fadeIn" data-wow-delay=".4s">
                <div class="col-lg-6">
                    <div class="item md-mb80">
                        <div class="row rest">
                            <div class="col-md-6">
                                <div class="img">
                                    <img src="{{ asset('template-front/assets/imgs/blog/h1.jpg') }}" alt="">
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
                                    <img src="{{ asset('template-front/assets/imgs/blog/h4.jpg') }}" alt="">
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

</x-front-layout>
<script>
    function changeImage(imageName, buttonId) {
        // Change the image source
        document.getElementById('displayedImage').src = imageName;

        // Remove 'active' class from all buttons
        document.querySelectorAll('.button-group button').forEach(function(button) {
            button.classList.remove('active');
        });

        // Add 'active' class to the clicked button
        document.getElementById(buttonId).classList.add('active');
    }
</script>

<style>
    .button-group {
        display: flex;
        justify-content: center;
        gap: 14px;
    }

    .home-custom-btn {
        background: none;
        color: #fff;
        border: 0;
        border-bottom: 2px solid #ffffff8f;
        padding: 1px 9px;
    }

    .home-custom-btn.active {
        border-bottom: 2px solid #fff;
    }

    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 100%;
        perspective: 1000px;
        /* Create 3D space */
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
    }

    .flip-card-front {
        position: relative;
        /* Front card styles */
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .flip-card-back {
        top: 0;
        /* Back card styles */
        transform: rotateY(180deg);
    }
</style>
