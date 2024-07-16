
<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Create Category
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
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
    console.log("create modal ")

        $('#save-category').click(function() {
            const url = "{{ route('categories.store') }}";

            $.ajax({
                url: url,
                method: 'POST',
                data: $('#save-category-data-form').serialize(),
                dataType: 'json', // Assuming response is JSON
                beforeSend: function() {
                    // Disable the button and show loading spinner if needed
                    $('#save-category').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Saving...');
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#myModalXl').modal('hide');
                        window.location.reload();
                    }
                },
                error: function(xhr) {
                    // Handle errors here
                    console.log(xhr.responseText);
                },
                complete: function() {
                    // Enable the button and hide loading spinner if needed
                    $('#save-category').prop('disabled', false).html('Save');
                    if (response.status == 'success') {
                        $('#myModalXl').modal('hide');
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
