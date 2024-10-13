<x-dashboard-layout>
    <div class="p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Commandes</h3>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>customer name</th>
                                <th>customer phone</th>
                                <th>customer address</th>
                                <th>customer city</th>
                                <th>total price</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->customer_phone }}</td>
                                    <td>{{ $order->customer_address }}</td>
                                    <td>{{ $order->customer_city }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>
                                        <div class="tags">
                                            <span
                                                class="tag
                                            @if ($order->status == 'en attente') tag-red
                                            @elseif($order->status == 'en cours') tag-blue
                                            @elseif($order->status == 'livraison') tag-orange
                                            @elseif($order->status == 'terminer') tag-green @endif">
                                                {{ ucfirst($order->status) }} 
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-order-id="{{ $order->id }}"
                                            class="btn btn-sm btn-primary mb-2 editCommandes" data-bs-toggle="modal"
                                            data-bs-target="#myModalXl">
                                            <i class="fe fe-edit-2"></i>
                                        </button>
                                        <button data-order-id="{{ $order->id }}"
                                            class="btn btn-sm btn-danger mb-2 deleteCommandes">
                                            <i class="fe fe-trash-2"></i>
                                        </button>
                                        <a href="{{ route('download.pdf', $order->id) }}" class="btn btn-sm btn-warning mb-2"><i class="fe fe-download"></i></a>


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

            $('.editCommandes').click(function() {
                var id = $(this).data('order-id');
                var url = "{{ route('checkout.edit', ':id') }}".replace(':id', id);

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


            $('.deleteCommandes').click(function() {
                var id = $(this).data('order-id');
                var url = "{{ route('order.drop', ':id') }}".replace(':id', id);

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
                                        'Your Commandes has been deleted.',
                                        'success'
                                    );
                                    window.location.reload();
                                }
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error!',
                                    'There was an error deleting the Commandes.',
                                    'error'
                                );
                            }
                        });
                        window.location.reload();

                    }
                });
            });
        });
    </script>
</x-dashboard-layout>
