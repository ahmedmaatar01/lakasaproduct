<div class="modal-header">
    <h4 class="mb-4 p-3 f-21 font-weight-normal text-capitalize border-bottom-grey">
        Create detail
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12 p-10">
            <form id="save-detail-data-form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-12">
                        <label for="name" class="form-label">detail Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <hr>
                    <div class="mb-3 col-lg-12">
                        <label for="title_1" class="form-label">Title 1</label>
                        <input type="text" class="form-control" id="title_1" name="title_1">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="description_1" class="form-label">Description 1</label>
                        <textarea class="form-control" id="description_1" name="description_1"></textarea>
                    </div>
                    <hr>
                    <h4>section 1</h4>
                    <div class="mb-3 col-lg-6">
                        <label for="section_title_1" class="form-label">Title 1</label>
                        <input type="text" class="form-control" id="section_title_1" name="section_title_1">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="section_image_1" class="form-label">Section Image 1</label>
                        <input type="file" class="form-control" id="section_image_1" name="section_image_1">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="section_paragraph_1" class="form-label">Description 1</label>
                        <textarea class="form-control" id="section_paragraph_1" name="section_paragraph_1"></textarea>
                    </div>
                    <hr>
                    <h4>section 2</h4>
                    <div class="mb-3 col-lg-6">
                        <label for="section_title_2" class="form-label">Title 2</label>
                        <input type="text" class="form-control" id="section_title_2" name="section_title_2">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="section_image_2" class="form-label">Section Image 2</label>
                        <input type="file" class="form-control" id="section_image_2" name="section_image_2">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="section_paragraph_2" class="form-label">Description 2</label>
                        <textarea class="form-control" id="section_paragraph_2" name="section_paragraph_2"></textarea>
                    </div>

                    <h4 style="
    border-top: 1px solid #6f6f6fb5;
    margin-top: 20px;
    padding-top: 10px;
">
                        section 3</h4>
                    <div class="mb-3 col-lg-6">
                        <label for="section_title_3" class="form-label">Title 3</label>
                        <input type="text" class="form-control" id="section_title_3" name="section_title_3">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="section_image_3" class="form-label">Section Image 3</label>
                                <input type="file" class="form-control" id="section_image_3"
                                    name="section_image_3">
                            </div>


                        </div>

                    </div>
                    <div class="mb-3 col-12">
                        <label for="section_paragraph_3" class="form-label">Description </label>
                        <textarea class="form-control" id="section_paragraph_3" name="section_paragraph_3"></textarea>
                    </div>
                    <h4 style="
    border-top: 1px solid #6f6f6fb5;
    margin-top: 20px;
    padding-top: 10px;
">
                        section 4 lumiere</h4>
                    {{-- brillante --}}
                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="lumiere_img1" class="form-label"> Brillante</label>
                                <input type="file" class="form-control" id="lumiere_img1" name="lumiere_img1">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lumiere_desc1" class="form-label">Description lumiere Brillante </label>
                        <textarea class="form-control" id="lumiere_desc1" name="lumiere_desc1"></textarea>
                    </div>
                    {{-- brillante end --}}
                    {{-- combiné --}}
                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="lumiere_img2" class="form-label"> Combinée</label>
                                <input type="file" class="form-control" id="lumiere_img2" name="lumiere_img2">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lumiere_desc2" class="form-label">Description lumiere Combinée </label>
                        <textarea class="form-control" id="lumiere_desc2" name="lumiere_desc2"></textarea>
                    </div>
                    {{-- combiné end --}}
                    {{-- Rétro --}}
                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="lumiere_img3" class="form-label"> Rétro</label>
                                <input type="file" class="form-control" id="lumiere_img3" name="lumiere_img3">
                            </div>


                        </div>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lumiere_desc3" class="form-label">Description lumiere Rétro </label>
                        <textarea class="form-control" id="lumiere_desc3" name="lumiere_desc3"></textarea>
                    </div>
                    {{-- Rétro end --}}

                    <h4 style="
    border-top: 1px solid #6f6f6fb5;
    margin-top: 20px;
    padding-top: 10px;
">
                        section 5 finition</h4>
                    <div class="mb-3 col-lg-12">
                        <label for="titre_section_5" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="titre_section_5" name="titre_section_5">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="parg_section5" class="form-label">Description </label>
                        <textarea class="form-control" id="parg_section5" name="parg_section5"></textarea>
                    </div>

                    <div class="mb-3 col-lg-6">
                        <label for="parg1_section_5" class="form-label">Description 1 </label>
                        <textarea class="form-control" id="parg1_section_5" name="parg1_section_5"></textarea>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="img1_section_5" class="form-label"> image finition 1</label>
                                <input type="file" class="form-control" id="img1_section_5"
                                    name="img1_section_5">
                            </div>


                        </div>
                    </div>

                    <div class="mb-3 col-lg-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="img2_section_5" class="form-label"> image finition 2</label>
                                <input type="file" class="form-control" id="img2_section_5"
                                    name="img2_section_5">
                            </div>


                        </div>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="parg2_section_5" class="form-label">Description 2 </label>
                        <textarea class="form-control" id="parg2_section_5" name="parg2_section_5"></textarea>
                    </div>

                    <h4 style="
    border-top: 1px solid #6f6f6fb5;
    margin-top: 20px;
    padding-top: 10px;
">
                        section 6 protection et couverture</h4>
                    <div class="mb-3 col-lg-12">
                        <label for="titre_section_6" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="titre_section_6" name="titre_section_6">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="parg1_section_6" class="form-label">Description protection et couverture </label>
                        <textarea class="form-control" id="parg1_section_6" name="parg1_section_6"></textarea>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="img2_section_6" class="form-label"> image protection et couverture</label>
                                <input type="file" class="form-control" id="img2_section_6"
                                    name="img2_section_6">
                            </div>
     

                        </div>
                    </div>

                    <h4 style="
    border-top: 1px solid #6f6f6fb5;
    margin-top: 20px;
    padding-top: 10px;">
                        section 7 couleur LED</h4>
                    <div class="mb-3 col-lg-12">
                        <label for="titre_section_7" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="titre_section_7" name="titre_section_7">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="parg1_section_7" class="form-label">Description couleur LED </label>
                        <textarea class="form-control" id="parg1_section_7" name="parg1_section_7"></textarea>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="img2_section_7" class="form-label"> image couleur LED</label>
                                <input type="file" class="form-control" id="img2_section_7"
                                    name="img2_section_7">
                            </div>


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
        <button type="button" id="save-detail" class="btn btn-primary">Save</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#save-detail').click(function() {
            const url = "{{ route('product-details.store') }}";
            let form = $('#save-detail-data-form')[0];
            let formData = new FormData(form);

            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $('#save-detail').prop('disabled', true).html(
                        '<i class="fa fa-spinner fa-spin"></i> Saving...');
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
                    $('#save-detail').prop('disabled', false).html('Save');
                }
            });
        });
    });
</script>
