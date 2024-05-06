@extends('dashboard::layouts.master')

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
@section('contents')
<div class="card-header">
    <div class="container">
        <div class="row py-2">
            <div class="col-4">
                <h4 class="card-title">All Entries</h4>
            </div>
            <div class="col-3">

            </div>
            <div class="col-3" style="display: flex; justify-content: flex-end;">
                <div class="position-relative mx-auto">
                    <input class="form-control  h-6 w-4 py-3 px-4 rounded-pill" type="text" id="searchInput" placeholder="Search">

                </div>
            </div>
            <div class="col-2" style="display: flex; justify-content: flex-end;">
                <a href="{{url('/product/create')}}" class="btn btn-primary">+ Add new</a>
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
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Mileage</th>
                    <th>Engine</th>
                    <th>Battery</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->model }}, {{$product->year}}</td>
                    <td>{{ $product->mileage }}</td>
                    <td>{{ $product->engine }}</td>
                    <td>{{ $product->battery }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div class="basic-dropdown">
                            <div class="dropdown">
                                <button type="button" class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $product->rating }}
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('product.rating', ['id' => $product->id , 'rating' => '1']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">1</button>
                                    </form>
                                    <form action="{{ route('product.rating', ['id' => $product->id , 'rating' => '2']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">2</button>
                                    </form>
                                    <form action="{{ route('product.rating', ['id' => $product->id , 'rating' => '3']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">3</button>
                                    </form>
                                    <form action="{{ route('product.rating', ['id' => $product->id , 'rating' => '4']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">4</button>
                                    </form>
                                    <form action="{{ route('product.rating', ['id' => $product->id , 'rating' => '5']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">5</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="basic-dropdown">
                            <div class="dropdown">
                                <button type="button" class="btn btn-{{ $product->status == 'approved' ? 'success' : ($product->status == 'rejected' ? 'danger' : ($product->status == 'pending' ? 'primary' : 'primary')) }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $product->status }}
                                </button>
                                <div class="dropdown-menu">
                                    <form action="{{ route('product.status', ['id' => $product->id , 'status' => 'pending']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Pending</button>
                                    </form>
                                    <form action="{{ route('product.status', ['id' => $product->id , 'status' => 'approved']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Approved</button>
                                    </form>
                                    <form action="{{ route('product.status', ['id' => $product->id , 'status' => 'rejected']) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Rejected</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex gap-3">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-dark">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $products->links() }}
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