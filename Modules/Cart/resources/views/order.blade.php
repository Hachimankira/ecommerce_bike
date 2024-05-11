<x-app-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">My Orders</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">My Orders</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    {{-- order section --}}
    <div class="container-fluid py-5">
        <div class="container py-5">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ordered Date</th>
                    <th scope="col">Billing Address</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Order  Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @foreach ($order->products as $product)
                                    {{ $loop->first ? '' : ', ' }}                           
                                    {{ $product->name }} {{ $product->brand->name ?? 'No Brand' }} {{ $product->model ?? 'No Model' }} {{ $product->year ?? 'No Year' }}
                                @endforeach
                            </td>
                            <td>{{ $order->created_at->format('Y-m-d') }}</td>
                            <td>{{ $order->address ?? "pickup" }}</td>
                            <td>${{ $order->total_price +15 }}</td>
                            <td>{{ $order->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</x-app-layout>
