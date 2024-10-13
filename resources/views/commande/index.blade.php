<x-front-layout>
    <section class="shop-checkout section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="order-form">
                        <h4 class="mb-40">Billing Details</h4>

                        <form id="checkout-form">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="total_price" value="{{ $total_price }}">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name *</label>
                                        <input type="text" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">last Name *</label>
                                        <input type="text" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Your Email *</label>
                                        <input type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Country *</label>
                                        <input type="text" name="country" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">City / Town *</label>
                                        <input type="text" name="city" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Area *</label>
                                        <input type="text" name="area" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Postal Code *</label>
                                        <input type="text" name="postal_code" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Address *</label>
                                        <input type="text" name="address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone *</label>
                                        <input type="text" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" name="company_name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="checkout-order-info">
                        <h4 class="mb-40">Your Order</h4>
                        <div>
                            <ul class="rest">
                                @foreach ($cart as $item)
                                    <li class="mb-10">
                                        <div class="d-flex align-items-top">
                                            <div style="width: 100%;">
                                                <div class="row">
                                                    <h5 class="fz-18 col">{{ $item['name'] }}</h5>
                                                    <div class=" col">
                                                        <h5 class="fz-18 text-right">
                                                            {{ number_format($item['price'], 2) }} Dt
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <ul>
                                                        <li>
                                                            <span class="key">langeur:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['langeur'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">largeur:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['largeur'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">cadre:</span>
                                                            <span class="separator"></span>
                                                            <span class="value main-color4">{{ $item['cadre'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">couleur du cadre:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['couleur_cadre'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">led:</span>
                                                            <span class="separator"></span>
                                                            <span class="value main-color4">{{ $item['led'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">mirroir:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['mirroir'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">interrepteur:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['interrepteur'] }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="key">quantity:</span>
                                                            <span class="separator"></span>
                                                            <span
                                                                class="value main-color4">{{ $item['quantity'] }}</span>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>

                                        </div>
                                    </li>
                                @endforeach

                                <li class="pt-10 bord-thin-top bord-thin-bottom">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6>Total</h6>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="main-color4 fz-20">{{ $total_price }} DT</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text mt-40">
                                <p>Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our <a
                                        href="#0">privacy policy</a>.</p>
                            </div>
                            <div class="mt-30">
                                <button id="place-order" class="butn butn-md butn-bg main-colorbg4 text-dark">
                                    <span class="text-u fw-600">Place Order</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
<style>
    .product-details li {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .product-details .separator {
        flex: 1;
        height: 0.5px;
        background: #ccc;
        opacity: 0.7;
        margin: 0 8px;
    }
</style>
<script>
    $(document).ready(function() {
        $('#place-order').click(function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $('#checkout-form').serialize(); // Serialize form data

            $.ajax({
                type: 'POST',
                url: '{{ route('checkout.store') }}',
                data: formData,
                success: function(response) {
                 window.location.reload();
                    // Redirect to another page or update the page content if needed
                },
                error: function(response) {
                    alert('An error occurred. Please try again.');
                    console.log(response); // Log error for debugging
                }
            });
        });
    });
</script>
