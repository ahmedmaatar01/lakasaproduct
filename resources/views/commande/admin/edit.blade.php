<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Update Commande
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12 p-10">
            <form id="save-order-data-form">
                @csrf
                @method('PUT')
                <div class="row border-bottom">
                    <h4> Details du Client</h4>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customer_name">Client</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name"
                                value="{{ $order->customer_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customer_email">Email Client</label>
                            <input type="text" class="form-control" id="customer_email" name="customer_email"
                                value="{{ $order->customer_email }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="customer_address">adresse Client</label>
                            <input type="text" class="form-control" id="customer_address" name="customer_address"
                                value="{{ $order->customer_address }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status du commande</label>
                            <select name="status" class="form-select" id="status">
                                <option value="en attente" @if ($order->status == 'en attente') selected @endif> en attente
                                </option>
                                <option value="en cours" @if ($order->status == 'en cours') selected @endif> en cours
                                </option>
                                <option value="livraison" @if ($order->status == 'livraison') selected @endif> en
                                    livraison</option>
                                <option value="terminer" @if ($order->status == 'terminer') selected @endif>terminer
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="customer_phone">Telephone Client</label>
                            <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                                value="{{ $order->customer_phone }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="customer_city">Ville du Client</label>
                            <input type="text" class="form-control" id="customer_city" name="customer_city"
                                value="{{ $order->customer_city }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="customer_postal_code">adresse postale</label>
                            <input type="text" class="form-control" id="customer_postal_code"
                                name="customer_postal_code" value="{{ $order->customer_postal_code }}" required>
                        </div>
                    </div>
                </div>
                <div class=" py-5">
                    <h4> Details du commande</h4>
                    <div class="row">
                        @forelse ($order->items as $item)
                            <div class="row">
                                <h5 class="py-3 pt-5">{{ $item->product_name }} :</h5>
                                <div class="form-group col-md-4 ">
                                    <label for="quantity">quantity</label>
                                    <input type="text" class="form-control" id="quantity"
                                        name="items[{{ $item->id }}][quantity]" value="{{ $item->quantity }}"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="length">hauteur</label>
                                    <input type="number" class="form-control" id="length"
                                        name="items[{{ $item->id }}][length]" value="{{ $item->length }}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="width">langeur</label>
                                    <input type="number" class="form-control" id="width"
                                        name="items[{{ $item->id }}][width]" value="{{ $item->width }}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="frame">frame</label>
                                    <input type="text" class="form-control" id="frame"
                                        name="items[{{ $item->id }}][frame]" value="{{ $item->frame }}"
                                        required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="frame_color">couleur cadre</label>
                                    <input type="text" class="form-control" id="frame_color"
                                        name="items[{{ $item->id }}][frame_color]"
                                        value="{{ $item->frame_color }}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="led_color">couleur led</label>
                                    <input type="text" class="form-control" id="led_color"
                                        name="items[{{ $item->id }}][led_color]" value="{{ $item->led_color }}"
                                        required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="mirror_color">couleur mirroir</label>
                                    <input type="text" class="form-control" id="mirror_color"
                                        name="items[{{ $item->id }}][mirror_color]"
                                        value="{{ $item->mirror_color }}" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="switch_type">interrepteur</label>
                                    <input type="text" class="form-control" id="switch_type"
                                        name="items[{{ $item->id }}][switch_type]"
                                        value="{{ $item->switch_type }}" required>
                                </div>


                            </div>
                        @empty
                            <h5>
                                la commande est vide
                            </h5>
                        @endforelse
                    </div>
                </div>
                <div class="hr"></div>

            </form>
        </div>
    </div>
</div>

<div class="modal-footer mt-3">
    <div class="w-100 border-top-grey">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="save-order" class="btn btn-primary">Save</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        console.log("edit modal loaded");

        $('#save-order').click(function() {
            console.log("save button clicked");
            const url = "{{ route('checkout.update', $order->id) }}"; // Update route

            $.ajax({
                url: url,
                method: "PUT",
                data: $('#save-order-data-form').serialize(),
                success: function(response) {
                    if (response.status == 'success') {
                        $('#myModalXl').modal('hide');
                        window.location.reload();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
