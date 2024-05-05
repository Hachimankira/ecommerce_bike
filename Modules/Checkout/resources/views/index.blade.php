<x-app-layout>
    @php
        $total = 0;
    @endphp
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Checkout</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Checkout</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Checkout Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Billing details</h1>
            <form action="{{ route('checkout.store') }}" method="POST" id="myForm">
                @csrf
                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Products</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $cartItem)
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $cartItem->product->banner_img }}"
                                                        class="img-fluid me-5 rounded-circle"
                                                        style="width: 60px; height: 60px;" alt="img">
                                                </div>
                                            </th>
                                            <td>
                                                <p class="mb-0 mt-4">{{ $cartItem->product->year }}
                                                    {{ $cartItem->product->brand }}
                                                    {{ $cartItem->product->model }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="mb-0 mt-4">${{ $cartItem->product->price }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 mt-4">${{ $cartItem->product->price }}</p>
                                            </td>
                                            @php
                                                $total += $cartItem->product->price;
                                            @endphp
                                        </tr>
                                    @endforeach
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                        </th>
                                        <td class="py-5"></td>
                                        <td class="py-5"></td>
                                        <td class="py-5">
                                            <p class="mb-0 text-dark py-3">Subtotal</p>
                                        </td>
                                        <td class="py-5">
                                            <div class="py-3 border-bottom border-top">
                                                <p class="mb-0 text-dark">${{ $total }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                        </th>
                                        <td class="py-5">
                                            <p class="mb-0 text-dark py-4">Shipping</p>
                                        </td>
                                        <td colspan="3" class="py-5">
                                            <div class="form-check text-start">
                                                <input type="checkbox" class="form-check-input bg-primary border-0"
                                                    id="Shipping-1" name="Shipping-1" value="Shipping">
                                                <label class="form-check-label" for="Shipping-1">Free Shipping</label>
                                            </div>
                                            <div class="form-check text-start">
                                                <input type="checkbox" class="form-check-input bg-primary border-0"
                                                    id="Shipping-2" name="Shipping-1" value="Shipping">
                                                <label class="form-check-label" for="Shipping-2">Flat rate:
                                                    $15.00</label>
                                            </div>
                                            <div class="form-check text-start">
                                                <input type="checkbox" class="form-check-input bg-primary border-0"
                                                    id="Shipping-3" name="Shipping-1" value="Shipping">
                                                <label class="form-check-label" for="Shipping-3">Local Pickup:
                                                    $8.00</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                        </th>
                                        <td class="py-5">
                                            <p class="mb-0 text-dark text-uppercase py-3">TOTAL</p>
                                        </td>
                                        <td class="py-5"></td>
                                        <td class="py-5"></td>
                                        <td class="py-5">
                                            <div class="py-3 border-bottom border-top">
                                                <p class="mb-0 text-dark">{{ $total }}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">First Name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Last Name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Address <sup>*</sup></label>
                            <input type="text" class="form-control" placeholder="House Number Street Name"
                                name="address">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Town/City<sup>*</sup></label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Mobile<sup>*</sup></label>
                            <input type="tel" class="form-control" name="phone">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Email Address<sup>*</sup></label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <input type="hidden" name="total" id="total" value="{{ $total }}">

                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <h3>Payment Method</h3>
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                {{-- <button type="submit" 
                                class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place
                                Order</button> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Pay Now
                                </button>
                                {{-- <div>
                                    <div id="paypal-payment-button" type="submit"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>
    <!-- Checkout Page End -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid featurs py-10 top-10">
                        <div id="paypal-payment-button" class="container py-10"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    <button type="button" id="orderNowBtn" class="btn btn-primary" disabled>Order Now</button>                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script
            src="https://www.paypal.com/sdk/js?client-id=AbijuJZ3znQTbK0DGkmaZaEnAb3RaONpYjebW__1DRklZwC6b8x6ON6ELCS2lf2AltEwJtCHKoXH57y3&components=buttons">
        </script>
        <script src="{{ asset('js/index.js') }}"></script>
        <script>
            window.routes = {
                success: "{{ route('cart.success') }}"
                // cancel: "{{ route('cart.cancel') }}"
            };
            total = {{ $total + 3 }};
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('orderNowBtn').addEventListener('click', function() {
                    document.getElementById('myForm').submit();
                });
            });
        </script>
    @endpush
</x-app-layout>
