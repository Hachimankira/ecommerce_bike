<x-app-layout>

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    <!-- Hero Start -->
    <x-hero />
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <x-card-feature icon="fas fa-car-side " feature="Secure Shipment" desc="Secure Shipment" />
                <x-card-feature icon="fas fa-user-shield " feature="Security Payment" desc="100% security payment" />
                <x-card-feature icon="fas fa-exchange-alt" feature="30 Day Return" desc="30 day money guarantee" />
                <x-card-feature icon="fas fa-phone-alt " feature="24/7 Support" desc="Support every time fast<" />
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->

    <!-- Bike Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Recommended Bikes</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill"
                                    href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Sports</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Street</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Cruiser</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($products as $product)
                                        <x-card-shop :product="$product" />
                                    @endforeach
                                    {{ $products->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($sports as $product)
                                        <x-card-shop :product="$product" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($streets as $product)
                                        <x-card-shop :product="$product" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach ($cruisers as $product)
                                        <x-card-shop :product="$product" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    {{-- <x-card-product gridClasses="col-md-6 col-lg-6 col-xl-4" /> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bike Shop End-->


    <!-- Featurs Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="text-start">
                    <h1>Shop By Brand</h1>
                </div>
                @foreach ($brands as $brand)
                    <div class="col-md-6 col-lg-2">
                        <a href="{{ url('home/' . $brand->id) }}">
                            <img src="{{ $brand->image }}" class="h-50 w-50" alt="img">
                            {{-- <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 image-container">
                                    <img src="{{ $brand->image }}" class="" alt="img">
                                </div>
                            </div> --}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featurs End -->


    <!-- Scooter Shop Start-->
    {{-- <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Featured Scooter</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
                <x-card-carousel />
            </div>
        </div>
    </div> --}}
    <!-- Scooter Shop End -->


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">The Best Deals</h1>
                        <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                        <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition
                            injected humour, or non-characteristic words etc.</p>
                        <form action="{{ route('cart.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" name="addToCart"
                                class="btn btn-primary btn-lg border border-secondary rounded-pill px-3 py-1 mb-1 ">
                                <i class="fa fa-shopping-bag me-2 ">Add to Cart</i>
                                
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/bike-banner.png" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute"
                            style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 50px;">$600</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4">Bestseller Products</h1>
                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which
                    looks reasonable.</p>
            </div>
            <div class="row g-4">
                <x-card-bestseller />
                <x-card-bestseller />
                <x-card-bestseller />
                <x-card-bestseller />
            </div>
        </div>
    </div> --}}
    <!-- Bestsaler Product End -->


    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>satisfied customers</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality of service</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!--testimonial Start-->
    {{-- <x-testimonial /> --}}
    <!--testimonial End-->
</x-app-layout>
