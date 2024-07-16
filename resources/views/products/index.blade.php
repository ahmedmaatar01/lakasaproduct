<x-dashboard-layout>
    <div class="p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Products</h3>
                <button id="addNewProduct" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#myModalXl">
                    <i class="fa fa-plus"></i> Add New Product
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price per Square Meter</th>
                                <th>Length</th>
                                <th>Height</th>
                                <th>Category</th>
                                <th>Featured Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->prix_metre_carre }}</td>
                                    <td>{{ $product->longeur }}</td>
                                    <td>{{ $product->hauteur }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        @if ($product->featuredImage)
                                            <img src="{{ asset('storage/' . $product->featuredImage->image_path) }}"
                                                alt="{{ $product->name }}" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <button data-cat-id="{{ $product->id }}"
                                            class="btn btn-sm btn-primary mb-2 editproduct" data-bs-toggle="modal"
                                            data-bs-target="#myModalXl">
                                            <i class="fe fe-edit-2"></i>
                                        </button>
                                        <button data-cat-id="{{ $product->id }}"
                                            class="btn btn-sm btn-danger mb-2 deleteproduct">
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

            $('.editproduct').click(function() {
                var id = $(this).data('cat-id');
                var url = "{{ route('products.edit', ':id') }}".replace(':id', id);

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

            $('#addNewProduct').click(function() {
                console.log("clicked");
                var url = "{{ route('products.create') }}";

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

            $('.deleteproduct').click(function() {
                var id = $(this).data('cat-id');
                var url = "{{ route('products.destroy', ':id') }}".replace(':id', id);

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
        });
    </script>
</x-dashboard-layout>
