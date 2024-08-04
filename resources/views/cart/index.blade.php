<x-front-layout>
    <!-- ==================== Start cart ==================== -->
    <section class="shop-cart section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td data-column="Product">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="img icon-img-80">
                                                        <img src="{{ asset('storage/' . $item['img']) }}"
                                                            alt="{{ $item['name'] }}">
                                                    </div>
                                                </div>
                                                <div class="ml-30">
                                                    <h6>{{ $item['name'] }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-column="price">
                                            <h5 class="main-color4 fz-18">{{ number_format($item['price'], 2) }} Dt</h5>
                                        </td>
                                        <td data-column="Quantity">
                                            <div class="counter">
                                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                <input type="text" value="{{ $item['quantity'] }}">
                                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                                            </div>
                                        </td>
                                        <td data-column="Subtotal">
                                            <h5 class="main-color4 fz-18">
                                                {{ number_format($item['price'] * $item['quantity'], 2) }} Dt</h5>
                                        </td>
                                        <td class="remove">
                                            <a href="javascript:;" class="remove-item">
                                                <span class="pe-7s-close" id="remove-item"
                                                    data-item-id="{{ $item['product_id'] }}">
                                                </span>
                                            </a>
                                        </td>
                                        {{-- <td class="remove">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                            <button type="submit" class="btn btn-danger btn-sm" style="background: transparent; border:0">
                                                <span class="pe-7s-close"></span>
                                            </button>
                                        </form>
                                    </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-80">
                        <div class="col-lg-6">
                            <div class="coupon mt-40">
                                <h4>Discount</h4>
                                <p class="fz-13">Enter your coupon code if you have one.</p>
                                <form action="https://uithemez.com/i/geekfolio/light/contact.php">
                                    <div class="form-group d-flex mt-30">
                                        <input type="text" name="coupon_code">
                                        <button type="submit" class="butn butn-md butn-bord">
                                            <span>Apply</span>
                                        </button>
                                    </div>
                                    <span class="fz-13 opacity-7 mt-10">Coupon code</span>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-2">
                            <div class="total mt-40">
                                <h4>Cart totals</h4>
                                <ul class="rest mt-30">

                                    <li>
                                        <h6>Total : <span class="fz-16 main-color4 ml-10">{{ $total_price }} DT</span>
                                        </h6>
                                    </li>
                                </ul>
                                <a href="shop-checkout.html" class="butn butn-md butn-bg main-colorbg4 mt-30">
                                    <span class="text-u fz-13 fw-600">Proceed to checkout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End cart ==================== -->
</x-front-layout>
<script src="assets/js/price-range.js"></script>
<script>
    $('.remove-item').click(function() {
        var id = $(this).data('item-id');
        console.log(id)
        var url = "{{ route('cart.remove', ':id') }}".replace(':id', id);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire(
                                'Deleted!',
                                'Your product has been deleted.',
                                'success'
                            );
                            window.location.reload();
                        }
                    },
                    error: function(xhr) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the product.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

