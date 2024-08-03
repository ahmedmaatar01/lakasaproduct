<!-- Edit Modal -->
<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Edit product
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12 p-10">
            <form id="update-product-data-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="prix_metre_carre" class="form-label">Price per Square Meter</label>
                    <input type="number" step="0.01" class="form-control" id="prix_metre_carre" name="prix_metre_carre" value="{{ $product->prix_metre_carre }}" required>
                </div>
                <div class="mb-3 d-flex ">
                    <label class="custom-control custom-checkbox-md me-5">
                        <input type="checkbox" class="custom-control-input" name="interrepteur" value="interrepteur"
                        @if($product->interrepteur=="1") 
                        checked=""
                        @endif >
                        <span class="custom-control-label">Interrepteur</span>
                    </label>
                    <label class="custom-control custom-checkbox-md">
                        <input type="checkbox" class="custom-control-input" name="led" value="led"
                            @if($product->led=="1") 
                            checked=""
                            @endif 
                        >
                        <span class="custom-control-label">Led</span>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image_avant" class="form-label">Product Featured Image</label>
                    <input type="file" class="form-control" id="image_avant" name="image_avant">
                    <!-- Display current featured image -->
                    @if($product->featuredImage)
                        <img src="{{ asset('storage/' . $product->featuredImage->image_path) }}" alt="Featured Image" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Product Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    <!-- Display current images -->
                    @foreach($product->images as $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="img-thumbnail mt-2" width="150">
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-footer mt-3">
    <div class="w-100 border-top-grey">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="update-product" class="btn btn-primary">Update</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#update-product').click(function() {
            const url = "{{ route('products.update', $product->id) }}";
            let form = $('#update-product-data-form')[0];
            let formData = new FormData(form);

            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $('#update-product').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Updating...');
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#myModalXl').modal('hide');
                        window.location.reload();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                },
                complete: function() {
                    $('#update-product').prop('disabled', false).html('Update');
                }
            });
        });
    });
</script>
