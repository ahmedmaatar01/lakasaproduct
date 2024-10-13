<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <span class="prev" onclick="changeSlide(-1)">&#10094;</span>
    <span class="next" onclick="changeSlide(1)">&#10095;</span>
    <img id="modalImage" src="" alt="Full View">
</div>
<x-front-layout>
    <!-- ==================== Start product ==================== -->

    <section class="product-details section-padding serv-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="img-preview">
                        <div class="gallery-top">
                            <div class="swiper-container" style="height: fit-content;">
                                <div class="swiper-wrapper">
                                    @foreach ($product_imgs as $image)
                                        <div class="swiper-slide">
                                            <div class="img">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt=""
                                                    onclick="openModal()" id="mainImage">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="gallery-thumb mt-10">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($product_imgs as $image)
                                        <div class="swiper-slide">
                                            <div class="img">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="">
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Fullscreen Image -->

                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="product-info">
                        <div class="top-info">
                            <h6 class="main-color4"> <span id="prix-produit">130</span> Dt</h6>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="line-height-1">{{ $product->name }}</h4>
                                </div>


                            </div>

                            <div class="text mt-30">
                                <p>{{ $product->description }}</p>
                            </div>

                        </div>
                        <div class="bord-thin-top row">
                            <!-- Select inputs start here -->

                            <div class="f-group col-md-12 mt-5">
                                <label>Cadre</label>
                                <select class="form-control select2" placeholder="selectionner un cadre" name="cadre">
                                    <option value="discret"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/cadre1.webp') }}">
                                        cadre
                                        discret</option>
                                    <option value="apparent"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/cadre2.webp') }}">
                                        cadre
                                        apparent</option>
                                </select>
                            </div>

                            <div class="f-group col-md-6 mt-5 d-flex flex-column ">
                                <label>langeur</label>
                                <input type="number" class="f-control f-number" style="color: #fff;" name="langeur"
                                    id="langeur" min="40" max="200" value="80">
                            </div>
                            <div class="f-group col-md-6 mt-5 d-flex flex-column">
                                <label>largeur</label>
                                <input type="number" class="f-control f-number" style="color: #fff;" name="largeur"
                                    id="largeur" min="40" max="200" value="60">

                            </div>
                            <div class="f-group col-md-12 mt-5">
                                <label>Couleur led</label>
                                <select class="form-control select2" placeholder="selectionner un couleur led"
                                    name="led">
                                    <option value="jaune"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/led1.webp') }}">
                                        couleur
                                        led 1</option>
                                    <option value="blanc"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/led2.webp') }}">
                                        couleur
                                        led 2</option>
                                </select>
                            </div>
                            <div class="f-group col-md-6 mt-5">
                                <label>Couleur mirroir</label>
                                <select class="form-control select2" placeholder="selectionner un couleur mirroir"
                                    name="mirroir">
                                    <option value="jaune"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/c1.webp') }}">rouge
                                    </option>
                                    <option value="blanc"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/c2.webp') }}">vert
                                        claire</option>
                                </select>
                            </div>
                            <div class="f-group col-md-6 mt-5">
                                <label>Couleur cadre</label>
                                <select class="form-control select2" placeholder="selectionner un couleur cadre"
                                    name="couleur-cadre">

                                    <option value="vert claire aliminum"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/c2.webp') }}"
                                        data-description="aucune frais additionnel ">vert
                                        claire</option>
                                    <option value="rouge bois"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/c1.webp') }}"
                                        data-description="aucune frais additionnel ">rouge
                                    </option>
                                </select>
                            </div>
                            <div class="f-group col-md-12 mt-5">
                                <label>Interrupteur</label>

                                <select id="custom-select" class="form-control custom-select2 interrepteur"
                                    name="interrepteur">
                                    <option value="sans"
                                        data-img-src="{{ asset('template-front/assets/imgs/produit/interrepteur1.jpg') }}"
                                        data-description="aucune frais additionnel ">sans</option>
                                    <option value="tactile"
                                        data-img-src={{ asset('template-front/assets/imgs/produit/interrepteur2.webp') }}
                                        data-description="+ 30 dt">tactile</option>

                                </select>
                            </div>
                            <!-- Select inputs end here -->
                        </div>
                        <div class="prod-order pt-30 pb-30 mt-50 bord-thin-top bord-thin-bottom">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="counter">
                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                        <input type="text" value="1">
                                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                                    </div>
                                </div>
                                <div class="ml-auto">

                                    <a href="" class="butn butn-md butn-bord add-to-cart"
                                        data-product-id="{{ $product->id }}">
                                        <span class="text-u fz-13">Add To Cart</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="mt-40">
                            <ul class="rest">

                                <li class="d-flex align-items-center mb-15">
                                    <strong>CATEGORY :</strong>
                                    <span class="ml-10"><a href="#0">{{ $product->category->name }}</a></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartes-produit">
                <div class="row">
                    <div class="col-lg-3 mb-15">
                        <div class="serv-item md-mb50 radius-10"
                            style="display: flex;flex-direction: column;align-items: center;padding: 30px 20px;">
                            <div class="icon-img-50 mb-10">
                                <img src="{{ asset('images/water.svg') }}" class="icon-white" alt="">
                            </div>
                            <h6 class="mb-30 pb-30 bord-thin-bottom">Etanchité </h6>
                            <p class="text-center">Elles dépendent du nombre de miroirs commandés et de la durée de la
                                coopération.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-15">
                        <div class="serv-item md-mb50 radius-10"
                            style="display: flex;flex-direction: column;align-items: center;padding: 30px 20px;">
                            <div class="icon-img-50 mb-10">
                                <img src="{{ asset('images/led.svg') }}" class="icon-white" alt="">
                            </div>
                            <h6 class="mb-30 pb-30 bord-thin-bottom">Qualité de led </h6>
                            <p class="text-center">Elles dépendent du nombre de miroirs commandés et de la durée de la
                                coopération.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-15">
                        <div class="serv-item radius-10"
                            style="display: flex;flex-direction: column;align-items: center;padding: 30px 20px;">
                            <div class="icon-img-50 mb-10">
                                <img src="{{ asset('images/fix.svg') }}" class="icon-white" alt="">
                            </div>
                            <h6 class="mb-30 pb-30 bord-thin-bottom">Systeme de fixation </h6>
                            <p class="text-center">Elles dépendent du nombre de miroirs commandés et de la durée de la
                                coopération.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-15">
                        <div class="serv-item radius-10"
                            style="display: flex;flex-direction: column;align-items: center;padding: 30px 20px;">
                            <div class="icon-img-50 mb-10">
                                <img src="{{ asset('images/mirror.svg') }}" class="icon-white" alt="">
                            </div>
                            <h6 class="mb-30 pb-30 bord-thin-bottom">Qualité de mirroir</h6>
                            <p class="text-center">Elles dépendent du nombre de miroirs commandés et de la durée de la
                                coopération.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mt-100">
                <div class="col-lg-11">
                    <div class="overview" id="tabs">
                        <ul class="rest tab-links mb-30">
                            <li class="item-link current" data-tab="tabs-1">
                                <h6>Description</h6>
                            </li>
                            <li class="item-link" data-tab="tabs-2">
                                <h6>Information</h6>
                            </li>
                            <li class="item-link" data-tab="tabs-3">
                                <h6>Reviews (1)</h6>
                            </li>
                        </ul>
                        <div class="tab-cont">
                            <div class="tab-content current" id="tabs-1">
                                <div class="item">
                                    <div class="text">
                                        <h3>{{ $product->productDetail->title_1 }}</h3>
                                        <p class="mb-15 mt-25" style="font-size: 1rem;">
                                            {{ $product->productDetail->description_1 }}
                                        </p>
                                    </div>
                                    <div class="row">
                                        @if (
                                            $product->productDetail->section_title_1 &&
                                                $product->productDetail->section_paragraph_1 &&
                                                $product->productDetail->section_image_1)
                                            <div class="col-lg-6 d-flex align-items-center px-5 mt-60">
                                                <div class="text mb-40">
                                                    <h3>{{ $product->productDetail->section_title_1 }}</h3>
                                                    <p class="mb-15 mt-25" style="font-size: 0.8rem;">
                                                        {{ $product->productDetail->section_paragraph_1 }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex align-items-center ">
                                                <img src="{{ asset('storage/' . $product->productDetail->section_image_1) }}"
                                                    alt="image mirroir">
                                            </div>
                                        @endif
                                        @if (
                                            $product->productDetail->section_title_2 &&
                                                $product->productDetail->section_paragraph_2 &&
                                                $product->productDetail->section_image_2)
                                            <div class="col-lg-6 d-flex align-items-center mt-60">
                                                <img src="{{ asset('storage/' . $product->productDetail->section_image_2) }}"
                                                    alt="image mirroir">
                                            </div>
                                            <div class="col-lg-6 d-flex align-items-center px-5">
                                                <div class="text">
                                                    <h3>{{ $product->productDetail->section_title_2 }}</h3>
                                                    <p class="mb-15 mt-25" style="font-size: 1rem;">
                                                        {{ $product->productDetail->section_paragraph_2 }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                        @if (
                                            $product->productDetail->section_title_3 &&
                                                $product->productDetail->section_paragraph_3 &&
                                                $product->productDetail->section_image_3)
                                            <div class="col-lg-6 d-flex align-items-center px-5 mt-60">
                                                <div class="text">
                                                    <h3>{{ $product->productDetail->section_title_3 }}</h3>
                                                    <p class="mb-15 mt-25" style="font-size: 0.8rem;">
                                                        {{ $product->productDetail->section_paragraph_3 }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $product->productDetail->section_image_3) }}"
                                                    alt="image mirroir">
                                            </div>
                                        @endif
                                        @if (
                                            $product->productDetail->lumiere_img1 &&
                                                $product->productDetail->lumiere_desc1 &&
                                                $product->productDetail->lumiere_img2 &&
                                                $product->productDetail->lumiere_desc1 &&
                                                $product->productDetail->lumiere_img3 &&
                                                $product->productDetail->lumiere_desc1)
                                            <div class="button-group  mt-60">
                                                <button id="btn1" class="home-custom-btn active"
                                                    onclick="changeImage('{{ asset('storage/' . $product->productDetail->lumiere_img1) }}', '{{ addslashes($product->productDetail->lumiere_desc1) }}', 'btn1')">
                                                    Miroir Lumière Brillante
                                                </button>
                                                <button id="btn2" class="home-custom-btn"
                                                    onclick="changeImage('{{ asset('storage/' . $product->productDetail->lumiere_img2) }}', '{{ addslashes($product->productDetail->lumiere_desc2) }}', 'btn2')">
                                                    Miroir Lumière Combinée
                                                </button>
                                                <button id="btn3" class="home-custom-btn"
                                                    onclick="changeImage('{{ asset('storage/' . $product->productDetail->lumiere_img3) }}', '{{ addslashes($product->productDetail->lumiere_desc3) }}', 'btn3')">
                                                    Miroir Lumière Rétro
                                                </button>
                                            </div>



                                            <div class="image-container px-5 pt-15 col-lg-4 d-flex align-items-center"
                                                style="margin-top: 20px;">
                                                <img id="displayedImage"
                                                    src="{{ asset('storage/' . $product->productDetail->lumiere_img1) }}"
                                                    alt="Displayed Image" style="max-width: 100%; height: auto;">
                                            </div>
                                            <div class="col-lg-8 d-flex align-items-center px-5">
                                                <div class="text">
                                                    <p class="mb-15 mt-25" style="font-size: 0.8rem;"
                                                        id="displayedParagraph">
                                                        {{ $product->productDetail->lumiere_desc1 }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($product->productDetail->parg_section5)
                                            <div class="col-12  mt-60">
                                                <p class="mb-15 mt-25" style="font-size: 0.8rem;">
                                                    {{ $product->productDetail->parg_section5 }}
                                                </p>
                                            </div>

                                            <div class="col-lg-8 d-flex align-items-center px-5">
                                                <div class="text">
                                                    <h3>{{ $product->productDetail->titre_section_5 }}</h3>
                                                    <p class="mb-15 mt-25" style="font-size: 0.8rem;">
                                                        {{ $product->productDetail->parg1_section_5 }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="image-container px-5 pt-15 col-lg-4 d-flex align-items-center"
                                                style="margin-top: 20px;">
                                                <img src="{{ asset('storage/' . $product->productDetail->img1_section_5) }}"
                                                    alt="Displayed Image" style="max-width: 100%; height: auto;">
                                            </div>


                                            <div class="image-container px-5 pt-15 col-lg-4 d-flex align-items-center"
                                                style="margin-top: 20px;">
                                                <img src="{{ asset('storage/' . $product->productDetail->img2_section_5) }}"
                                                    alt="Displayed Image" style="max-width: 100%; height: auto;">
                                            </div>
                                            <div class="col-lg-8 d-flex align-items-center px-5">
                                                <div class="text">
                                                    <p class="mb-15 mt-25" style="font-size: 0.8rem;">
                                                        {{ $product->productDetail->parg2_section_5 }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                        @if (
                                            $product->productDetail->titre_section_6 &&
                                                $product->productDetail->parg1_section_6 &&
                                                $product->productDetail->img2_section_6)
                                            <h3 class="col-12  mt-60">{{ $product->productDetail->titre_section_6 }}
                                            </h3>
                                            <p class="mb-15 mt-25 col-12" style="font-size: 0.8rem;">
                                                {{ $product->productDetail->parg1_section_6 }}
                                            </p>
                                            <div class="image-container px-5 pt-15 col-lg-12 d-flex align-items-center"
                                                style="margin-top: 20px;">
                                                <img class="col-12"
                                                    src="{{ asset('storage/' . $product->productDetail->img2_section_6) }}"
                                                    alt="Displayed Image" style="max-width: 100%; height: auto;">
                                            </div>
                                        @endif

                                        @if (
                                            $product->productDetail->titre_section_7 &&
                                                $product->productDetail->parg1_section_7 &&
                                                $product->productDetail->img2_section_7)
                                            <h3 class="col-12 mt-60">{{ $product->productDetail->titre_section_7 }}
                                            </h3>
                                            <p class="mb-15 mt-25 col-12" style="font-size: 0.8rem;">
                                                {{ $product->productDetail->parg1_section_7 }}
                                            </p>
                                            <div class="image-container px-5 pt-15 col-lg-12 d-flex align-items-center"
                                                style="margin-top: 20px;">
                                                <img class="col-12"
                                                    src="{{ asset('storage/' . $product->productDetail->img2_section_7) }}"
                                                    alt="Displayed Image" style="max-width: 100%; height: auto;">
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-2">
                                <div class="item info">
                                    <ul class="rest">
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Cadre</span>
                                            <span class="line"></span>
                                            <span class="ml-auto">Aluminium (disponible en finition apparente ou
                                                discrète)</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Couverture Arrière</span>
                                            <span class="line"></span>
                                            <span class="ml-auto">PVC blanc étanche, protection contre
                                                l'humidité</span>
                                        </li>
                                        @if ($product->interrepteur == '1' && $product->led == '1')
                                            <li class="d-flex align-items-center mb-15">
                                                <span class="text-u fw-500">Couleurs de LED</span>
                                                <span class="line"></span>
                                                <span class="ml-auto">Blanc Chaud (2700K - 3000K) : Ambiance
                                                    chaleureuse
                                                    <br> Blanc Neutre (4000K - 4500K) : Lumière naturelle
                                                    <br>Blanc Froid (5000K - 5500K) : Lumière vive et claire</span>
                                            </li>
                                        @endif
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Couverture Arrière</span>
                                            <span class="line"></span>
                                            <span class="ml-auto">PVC blanc étanche, protection contre
                                                l'humidité</span>
                                        </li>
                                        @if ($product->interrepteur == '1' && $product->led == '1')
                                            <li class="d-flex align-items-center mb-15">
                                                <span class="text-u fw-500">Éclairage</span>
                                                <span class="line"></span>
                                                <span class="ml-auto">LED basse consommation, longue durée de
                                                    vie</span>
                                            </li>
                                        @endif
                                        @if ($product->interrepteur == '1' && $product->led == '1')
                                            <li class="d-flex align-items-center mb-15">
                                                <span class="text-u fw-500">style d'Éclairage</span>
                                                <span class="line"></span>
                                                <span class="ml-auto">Lumière Brillante : Éclairage direct autour du
                                                    miroir
                                                    <br> Lumière Rétro : Éclairage indirect sur les quatre côtés (effet
                                                    lèche-mur)
                                                    <br> Lumière Combinée : Combinaison d’éclairage direct et
                                                    indirect</span>
                                            </li>
                                        @endif
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Matériau Miroir</span>
                                            <span class="line"></span>
                                            <span class="ml-auto">Miroir de haute qualité, AGC</span>
                                        </li>
                                        @if ($product->interrepteur == '1' && $product->led == '1')
                                            <li class="d-flex align-items-center mb-15">
                                                <span class="text-u fw-500">Options de Contrôle </span>
                                                <span class="line"></span>
                                                <span class="ml-auto"> Sans Interrupteur ou Interrupteur tactile</span>
                                            </li>
                                        @endif

                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Dimensions </span>
                                            <span class="line"></span>
                                            <span class="ml-auto">Sur mesure, selon les modèles</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Installation </span>
                                            <span class="line"></span>
                                            <span class="ml-auto"> Montage mural avec kit de fixation inclus</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Indice de Protection </span>
                                            <span class="line"></span>
                                            <span class="ml-auto"> IP44 (protégé contre les projections d'eau)</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-15">
                                            <span class="text-u fw-500">Certifications </span>
                                            <span class="line"></span>
                                            <span class="ml-auto">Conforme aux normes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-3">
                                <div class="item reviews">
                                    <div class="reviews-area">
                                        <div class="d-flex">
                                            <div>
                                                <div class="img circle-100">
                                                    <img src="assets/imgs/testim/1.jpg" alt=""
                                                        class="circle-img">
                                                </div>
                                            </div>
                                            <div class="cont ml-30">
                                                <div class="rate fz-12 opacity-7 mb-10">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h6 class="fz-17 fw-400">Evie Howarth – <span
                                                        class="fz-14 opacity-7">February 10, 2023</span>
                                                </h6>
                                                <p>Aenean iaculis, neque ultricies efficitur ultricies,
                                                    risus sapien dapibus ante, ac venenatis nisi est nec
                                                    sem. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Vestibulum ut pellentesque ante.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-review mt-50">
                                        <div>
                                            <h6>Add a review</h6>
                                            <p class="fz-14">Your email address will not be published.
                                                Required fields are marked *</p>
                                        </div>
                                        <div class="d-flex align-items-center mt-30">
                                            <div>
                                                <p class="fz-13">Your Rating</p>
                                            </div>
                                            <div>
                                                <div class="star-rating ml-10">
                                                    <input id="star-5" type="radio" name="rating"
                                                        value="star-5" />
                                                    <label for="star-5" title="5 stars">
                                                        <i class="active fas fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-4" type="radio" name="rating"
                                                        value="star-4" />
                                                    <label for="star-4" title="4 stars">
                                                        <i class="active fas fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-3" type="radio" name="rating"
                                                        value="star-3" />
                                                    <label for="star-3" title="3 stars">
                                                        <i class="active fas fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-2" type="radio" name="rating"
                                                        value="star-2" />
                                                    <label for="star-2" title="2 stars">
                                                        <i class="active fas fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-1" type="radio" name="rating"
                                                        value="star-1" />
                                                    <label for="star-1" title="1 star">
                                                        <i class="active fas fa-star" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form mt-50">
                                            <form action="https://uithemez.com/i/geekfolio/light/contact.php">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-30">
                                                            <input type="text" name="name"
                                                                placeholder="Your Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-30">
                                                            <input type="email" name="email"
                                                                placeholder="Your Email*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea name="comment" placeholder="Your Review*"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="checkbox mt-10">
                                                            <input type="checkbox" id="saveInfo" name="userinfo"
                                                                value="userinfo" />
                                                            <label for="saveInfo">Save my name, email, and website in
                                                                this browser for the next time I comment.</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="text-center mt-40">
                                                            <button type="submit" class="butn butn-md butn-bord">
                                                                <span>Submit</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-100">
                <div class="col-lg-11">
                    <div class="main-shop">
                        <div class="shop-products">
                            <div>
                                <h4>Related products</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="item mt-50">
                                        <div class="img">
                                            <img src="{{ asset('template-front/assets/imgs/shop/5.jpg') }}"
                                                alt="">
                                            <a href="#0" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6>Men Hooded</h6>
                                            <h5>$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item mt-50">
                                        <div class="img">
                                            <img src="{{ asset('template-front/assets/imgs/shop/4.jpg') }}"
                                                alt="">
                                            <a href="#0" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h6>Men Hooded</h6>
                                            <h5>$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item mt-50">
                                        <div class="img">
                                            <img src="{{ asset('template-front/assets/imgs/shop/8.jpg') }}"
                                                alt="">
                                            <a href="#0" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6>Men Hooded</h6>
                                            <h5>$130.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item mt-50">
                                        <div class="img">
                                            <img src="{{ asset('template-front/assets/imgs/shop/2.jpg') }}"
                                                alt="">
                                            <a href="#0" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h6>Men Hooded</h6>
                                            <h5>$130.00</h5>
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

    <!-- ==================== End product ==================== -->
</x-front-layout>
<script src="assets/js/price-range.js"></script>

<!-- custom inputs scripts -->
<script src="{{ asset('template-front/assets/js/custom-inputs.js') }}"></script>
<script>
    $(document).ready(function() {
        // Calculate and update the product price
        function updatePrice() {
            var langeur = parseFloat($('#langeur').val());
            var largeur = parseFloat($('#largeur').val());
            var pricePerSquareMeter = parseFloat('{{ $product->prix_metre_carre }}');
            var basePrice = langeur * largeur * pricePerSquareMeter;

            // Check if "interrupteur tactile" is selected and add 30 to the price if it is
            var isTactileSelected = $('.interrepteur').val() === 'tactile';
            console.log($('.interrepteur').val())
            if (isTactileSelected) {
                basePrice += 30;
            }

            $('#prix-produit').text(basePrice.toFixed(2));
        }

        // Bind keyup event to langeur and largeur inputs
        $('#langeur, #largeur').on('keyup', function() {
            updatePrice();
        });
        $('#custom-select').on('change', function() {
            console.log("its changed")
            updatePrice();
        });


        // Bind click event to the custom dropdown options
        $('.selectDropdown a').on('click', function() {
            clearTimeout(updateTimeout);
            updateTimeout = setTimeout(function() {
                console.log("interrepteur changed");
                updatePrice();
            }, 100); // Delay in milliseconds
        });

        // Initial price calculation
        updatePrice();
        // Handle Add to Cart click
        $('.add-to-cart').on('click', function(e) {
            e.preventDefault();

            var productId = $(this).data('product-id');
            var langeur = $('#langeur').val();
            var largeur = $('#largeur').val();
            var cadre = $('select[name="cadre"]').val();
            var led = $('select[name="led"]').val();
            var mirroir = $('select[name="mirroir"]').val();
            var couleurCadre = $('select[name="couleur-cadre"]').val();
            var interrepteur = $('select[name="interrepteur"]').val();
            var quantity = $('.counter input').val();
            var price = $('#prix-produit').text();

            var data = {
                product_id: productId,
                langeur: langeur,
                largeur: largeur,
                cadre: cadre,
                led: led,
                mirroir: mirroir,
                couleur_cadre: couleurCadre,
                interrepteur: interrepteur,
                quantity: quantity,
                price: price,
                _token: '{{ csrf_token() }}'
            };

            $.ajax({
                url: '{{ route('cart.add') }}',
                method: 'POST',
                data: data,
                success: function(response) {
                    alert('Product added to cart successfully!');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('There was an error adding the product to the cart.');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('.select2').select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            minimumResultsForSearch: -1 // Disable search

        });
        $('#custom-select').select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            minimumResultsForSearch: -1 // Disable search

        });
    });
    let images = @json(
        $product_imgs->map(function ($image) {
            return asset('storage/' . $image->image_path);
        }));
    let currentIndex = 0;

    function openModal() {
    var modal = document.getElementById('imageModal');
    var mainImage = document.getElementById('mainImage');
    
    modal.style.display = "flex";
    modal.querySelector('#modalImage').src = mainImage.src;
    
    // Disable scrolling on the body
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    var modal = document.getElementById('imageModal');
    
    modal.style.display = "none";
    
    // Enable scrolling on the body
    document.body.style.overflow = 'auto';
}

    function changeSlide(direction) {
        currentIndex = (currentIndex + direction + images.length) % images.length;
        console.log(currentIndex)
        var modalImage = document.getElementById('modalImage');
        modalImage.src = images[currentIndex];
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

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        /* Full height of the viewport */
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        overflow: hidden;
        z-index: 1000;
        /* Prevent scrolling */
    }

    .modal img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        border-radius: 10px;
    }

    .close,
    .prev,
    .next {
        position: absolute;
        top: 50%;
        color: white;
        font-size: 30px;
        cursor: pointer;
        transform: translateY(-50%);
        padding: 10px;
    }

    .close {
        top: 10px;
        right: 20px;
        transform: none;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
