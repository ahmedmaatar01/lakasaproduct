<x-front-layout>
    <section class="main-shop section-padding">
        <div class="container">
            <div class="row md-marg">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Search Form -->
                        <div class="item search mb-40">
                            <form action="{{ route('shop.index') }}" method="GET" id="filter-form">
                                <div class="form-group">
                                    <input type="text" name="shop_search" placeholder="Search">
                                    <button type="submit">
                                        <span class="pe-7s-search"></span>
                                    </button>
                                </div>
                                <!-- Style Lumière Filter as Checkboxes -->
                                <div class="item style-lumiere mb-40 mt-40">
                                    <div class="title">
                                        <h6>Type</h6>
                                    </div>
                                    <ul class="rest custom-checkbox">
                                        <li>
                                            <label>
                                                <input type="checkbox" name="mirroir[]" value="simple"
                                                {{ in_array('simple', (array) request()->get('mirroir', [])) ? 'checked' : '' }}
                                                class="form-check-input">
                                            
                                                Mirroire simple
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="mirroir[]" value="led"

                                                    {{ in_array('led', (array)  request()->get('mirroir', [])) ? 'checked' : '' }}
                                                    class="form-check-input">
                                                Mirroir led
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Categories Filter -->
                                @if ($categories)
                                <div class="item categories mb-40">
                                    <div class="title">
                                        <h6>Categories</h6>
                                    </div>
                                    <div class="">
                                        <ul class="rest custom-checkbox">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <label>
                                                        <input class="form-check-input" type="checkbox"
                                                            name="categories[]" value="{{ $category->id }}"
                                                            {{ in_array($category->id, (array)  request()->get('categories', [])) ? 'checked' : '' }}>
                                                        {{ $category->name }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div> 
                                @endif


                                <!-- Forme Filter as Checkboxes -->
                                <div class="item forme mb-40">
                                    <div class="title">
                                        <h6>Forme</h6>
                                    </div>
                                    <ul class="rest custom-checkbox">
                                        <li>
                                            <label>
                                                <input type="checkbox" name="forme[]" value="rectangulaire"
                                                    class="form-check-input"
                                                    {{ in_array('rectangulaire', (array)  request()->get('forme', [])) ? 'checked' : '' }}>
                                                Rectangulaire
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="forme[]" value="rond"
                                                    class="form-check-input"
                                                    {{ in_array('rond',  (array)  request()->get('forme', [])) ? 'checked' : '' }}>
                                                Rond
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="forme[]" value="semi ovale"
                                                    class="form-check-input"
                                                    {{ in_array('semi ovale', (array)  request()->get('forme', [])) ? 'checked' : '' }}>
                                                Semi Ovale
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="forme[]" value="abstraite"
                                                    class="form-check-input"
                                                    {{ in_array('abstraite', (array)  request()->get('forme', [])) ? 'checked' : '' }}>
                                                Abstraite
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Style Lumière Filter as Checkboxes -->
                                <div class="item style-lumiere mb-40">
                                    <div class="title">
                                        <h6>Style de Lumière</h6>
                                    </div>
                                    <ul class="rest custom-checkbox">
                                        <li>
                                            <label>
                                                <input type="checkbox" name="style_lumiere[]" value="combiner"
                                                    class="form-check-input"
                                                    {{ in_array('combiner', (array)  request()->get('style_lumiere', [])) ? 'checked' : '' }}>
                                                Combiner
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="style_lumiere[]" value="brillant"
                                                    class="form-check-input"
                                                    {{ in_array('brillant', (array)  request()->get('style_lumiere', [])) ? 'checked' : '' }}>
                                                Brillant
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" name="style_lumiere[]" value="retro"
                                                    class="form-check-input"
                                                    {{ in_array('retro', (array)  request()->get('style_lumiere', [])) ? 'checked' : '' }}>
                                                Retro
                                            </label>
                                        </li>
                                    </ul>
                                </div>


                                <!-- Filter Button -->
                                <button type="submit" class="btn btn-primary  custom-button mt-3">Filter</button>
                            </form>
                        </div>

                        <!-- Other Filters -->
                        <div class="item price-range mb-40">
                            <div class="title">
                                <h6>Filter by Price</h6>
                            </div>
                            <div class="wrapper">
                                <div class="slider-range">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="10" max="10000" value="10"
                                        step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500"
                                        step="100">
                                </div>
                                <div class="price-input d-flex align-items-center mt-15">
                                    <div>
                                        <div class="field">
                                            <span>$</span>
                                            <input type="number" class="input-min" value="10">
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="field">
                                            <span>$</span>
                                            <input type="number" class="input-max" value="7500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Best Sellers and Popular Tags Sections... -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-products">
                        <div class="top-side d-flex align-items-end mb-40">
                            <div>
                                <h6 class="fz-16 line-height-1">Showing {{ $products->count() }} of
                                    {{ $products->total() }} results</h6>
                            </div>
                            <div class="ml-auto">
                                <div>
                                    <select class="form-control">
                                        <option value="Most Popular">Most Popular</option>
                                        <option value="Sort by average rating">Sort by average rating</option>
                                        <option value="Price [Lowest to Highest]">Price [Lowest to Highest]</option>
                                        <option value="Price [Highest to Lowest]">Price [Highest to Lowest]</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <div class="item mb-50">
                                        <div class="img">
                                            <img src="{{ Storage::url($product->featuredImage->image_path) }}"
                                                alt="{{ $product->name }}">
                                            <a href="{{ route('singleproduct.index', $product->id) }}"
                                                class="add-cart">Savoir Plus</a>
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
                                            <h6>{{ $product->name }}</h6>
                                            <h5>${{ number_format($product->prix_metre_carre, 2) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination d-flex justify-content-center mt-30">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
<script src="{{ asset('template-front/assets/js/price-range.js') }}"></script>
