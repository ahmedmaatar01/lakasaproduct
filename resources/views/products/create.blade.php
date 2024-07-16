<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Create product
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12 p-10">
            <form id="save-product-data-form" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="prix_metre_carre" class="form-label">Price per Square Meter</label>
                    <input type="number" step="0.01" class="form-control" id="prix_metre_carre" name="prix_metre_carre" required>
                </div>
                <div class="mb-3">
                    <label for="longeur" class="form-label">Length</label>
                    <input type="number" step="0.01" class="form-control" id="longeur" name="longeur" required>
                </div>
                <div class="mb-3">
                    <label for="hauteur" class="form-label">Height</label>
                    <input type="number" step="0.01" class="form-control" id="hauteur" name="hauteur" required>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" id="category_id" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image_avant" class="form-label">ProductcFeatured Image</label>
                    <input type="file" class="form-control" id="image_avant" name="image_avant">
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Product Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-footer mt-3">
    <div class="w-100 border-top-grey">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="save-product" class="btn btn-primary">Save</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#save-product').click(function() {
            const url = "{{ route('products.store') }}";
            let form = $('#save-product-data-form')[0];
            let formData = new FormData(form);

            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $('#save-product').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Saving...');
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#myModalXl').modal('hide');
                        // window.location.reload();
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                },
                complete: function() {
                    $('#save-product').prop('disabled', false).html('Save');
                }
            });
        });
    });
</script>
