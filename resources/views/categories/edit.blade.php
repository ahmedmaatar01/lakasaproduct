
<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Update Category
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12 p-10">
            <form id="save-category-data-form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-footer mt-3">
    <div class="w-100 border-top-grey">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="save-category" class="btn btn-primary">Save</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        console.log("edit modal loaded");

        $('#save-category').click(function() {
            console.log("save button clicked");
            const url = "{{ route('categories.update', $category->id) }}"; // Update route

            $.ajax({
                url: url,
                method: "PUT",
                data: $('#save-category-data-form').serialize(),
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
