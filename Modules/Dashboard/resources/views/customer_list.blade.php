@extends('dashboard::layouts.master')

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
@section('contents')
    <div class="card-header">
        <div class="container">
            <div class="row py-2">
                <div class="col-4">
                    <h4 class="card-title">Customer Lists</h4>
                </div>
                <div class="col-3">

                </div>
                <div class="col-3" style="display: flex; justify-content: flex-end;">
                    <div class="position-relative mx-auto">
                        <input class="form-control  h-6 w-4 py-3 px-4 rounded-pill" type="text" id="searchInput"
                            placeholder="Search">

                    </div>
                </div>
                <div class="col-2" style="display: flex; justify-content: flex-end;">
                    <a href="{{ url('/product/create') }}" class="btn btn-primary">+ Add new</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="infoTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Products Order</th>
                        <th>Delivery Status</th>
                        <th>Price</th>
                    </tr>
                </thead>

                <tbody>
                <tbody>
                    @foreach ($customers as $customer)
                        @foreach ($customer->orders as $order)
                            @foreach ($order->products as $product)
                                {{-- Assuming `products` is a valid relationship on `orders` --}}
                                <tr>
                                    <td>{{ $loop->parent->parent->iteration }}</td> {{-- Customer loop iteration --}}
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $product->name }}</td> {{-- Product name --}}
                                    <td>{{ $order->total }}</td> {{-- Assuming there's a `total` field in orders --}}
                                    <td>
                                        <div class="basic-dropdown">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-dark" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    {{ $order->status }}
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Status Update Forms -->
                                                    @foreach (['pending', 'InProcess', 'Delivered'] as $status)
                                                        <form
                                                            action="{{ route('order.status', ['id' => $order->id, 'status' => $status]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="dropdown-item">{{ $status }}</button>
                                                        </form>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- Similar structure for product status, adapted from your original example -->
                                        <!-- Add checks and balances as needed -->
                                    </td>
                                    <td>
                                        <!-- Product management links -->
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>

                </tbody>
            </table>
        </div>
        {{-- {{ $customers->links() }} --}}
    </div>

    @push('scripts')
        <script>
            document.getElementById('searchInput').addEventListener('keyup', function() {
                var searchValue = this.value.toLowerCase();
                var tableRows = document.querySelectorAll('#infoTable tbody tr');

                tableRows.forEach(function(row) {
                    var rowText = row.textContent.toLowerCase();
                    row.style.display = rowText.includes(searchValue) ? '' : 'none';
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endpush
@endsection
