<x-dashboard-layout>
    <div class="p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Categories</h3>
                <button id="addNewCategory" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#myModalXl">
                    <i class="fa fa-plus"></i> Add New Category
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Date de création</th>
                                <th>Date de modification</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->name }}</td>
                                    <td>{{ $categorie->created_at }}</td>
                                    <td>{{ $categorie->updated_at }}</td>
                                    <td>
                                        <button data-cat-id="{{ $categorie->id }}" class="btn btn-sm btn-primary mb-2 editCategory" data-bs-toggle="modal" data-bs-target="#myModalXl">
                                            <i class="fe fe-edit-2"></i>
                                        </button>
                                        <button data-cat-id="{{ $categorie->id }}" class="btn btn-sm btn-danger mb-2 deleteCategory">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Placeholder for modal content -->
    <div id="myModalXl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" id="modalContent">
                <!-- Modal content will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("loaded");

            $('.editCategory').click(function() {
                var id = $(this).data('cat-id');
                var url = "{{ route('categories.edit', ':id') }}".replace(':id', id);

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        $('#modalContent').html(response);
                        $('#myModalXl').modal('show');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $('#addNewCategory').click(function() {
                console.log("clicked");
                var url = "{{ route('categories.create') }}";

                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        $('#modalContent').html(response);
                        $('#myModalXl').modal('show');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $('.deleteCategory').click(function() {
                var id = $(this).data('cat-id');
                var url = "{{ route('categories.destroy', ':id') }}".replace(':id', id);

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
                                        'Your category has been deleted.',
                                        'success'
                                    );
                                    window.location.reload();
                                }
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the category.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
</x-dashboard-layout>
