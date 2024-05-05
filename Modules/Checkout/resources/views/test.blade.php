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
            <form action="#">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-7">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">First Name<sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Last Name<sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Company Name<sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Address <sup>*</sup></label>
                            <input type="text" class="form-control" placeholder="House Number Street Name">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Town/City<sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Country<sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Postcode/Zip<sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Mobile<sup>*</sup></label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Email Address<sup>*</sup></label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-check my-3">
                            <input type="checkbox" class="form-check-input" id="Account-1" name="Accounts"
                                value="Accounts">
                            <label class="form-check-label" for="Account-1">Create an account?</label>
                        </div>
                        <hr>
                        <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" id="Address-1" name="Address"
                                value="Address">
                            <label class="form-check-label" for="Address-1">Ship to a different address?</label>
                        </div>
                        <div class="form-item">
                            <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="11"
                                placeholder="Oreder Notes (Optional)"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5">
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
                                                <p class="mb-0 mt-4">{{ $cartItem->product->price }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 mt-4">{{ $cartItem->product->price }}</p>
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
                                                <p class="mb-0 text-dark">{{ $total }}</p>
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
                                                <p class="mb-0 text-dark">$135.00</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                            <h3>Payment Method</h3>
                            <div
                                class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                                <div class="col-12">
                                    <div class="form-check text-start my-3">
                                        <input type="checkbox" class="form-check-input bg-primary border-0"
                                            id="Paypal-1" name="Paypal" value="Paypal">
                                        <label class="form-check-label" for="Paypal-1">Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="button"
                                    class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place
                                    Order</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page End -->
</x-app-layout>
