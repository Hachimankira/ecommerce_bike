@extends('dashboard::layouts.master')

@section('contents')
<div class="card-header">
    <div class="container">
        <div class="row py-2">
            <div class="col-4">
                <h4 class="card-title">Order Lists</h4>
            </div>
            <div class="col-3">
                <!-- Space reserved for potential future use -->
            </div>
            <div class="col-3" style="display: flex; justify-content: flex-end;">
                <div class="position-relative mx-auto">
                    <input class="form-control h-6 w-4 py-3 px-4 rounded-pill" type="text" id="searchInput" placeholder="Search">
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
                    <th>Products Ordered</th>
                    <th>Product ID</th>
                    <th>Order ID</th>
                    <th>Ordered By</th>
                    <th>Total Price</th>
                    <th>Delivery Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @foreach ($order->products as $product)
                            {{ $loop->first ? '' : ', ' }}                           
                            {{ $product->name }} {{ $product->brand->name ?? 'No Brand' }} {{ $product->model ?? 'No Model' }} {{ $product->year ?? 'No Year' }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($order->products as $product)
                            {{ $loop->first ? '' : ', ' }} 
                            {{$product->id}}                          
                        @endforeach
                    </td>
                    <td>{{$order->id}}</td>
                    <td>{{ $order->user->name ?? 'N/A' }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>
                        <div class="basic-dropdown">
                            <div class="dropdown">
                                <button type="button" class="btn btn-{{ $order->status == 'delivered' ? 'success' : ($order->status == 'pending' ? 'danger' : 'primary') }}" data-bs-toggle="dropdown" aria-expanded="false" style="overflow: visible;">
                                    {{ $order->status }}
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('order.status', ['id' => $order->id, 'status' => 'pending']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Pending</button>
                                    </form>
                                    <form action="{{ route('order.status', ['id' => $order->id, 'status' => 'InProcess']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">InProcess</button>
                                    </form>
                                    <form action="{{ route('order.status', ['id' => $order->id, 'status' => 'Delivered']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Delivered</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    {{ $orders->links() }}
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
@push('styles')
<style>
    .dropdown-menu {
        max-height: none; /* Remove any max-height if set */
        overflow-y: visible; /* Show all options without scroll */
    }
</style>
@endpush

@endsection
