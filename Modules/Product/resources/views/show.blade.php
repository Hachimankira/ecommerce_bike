<x-app-layout>
    @php
        $inCart = \Modules\Cart\Models\Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->exists();

        $inWishlist = \Modules\Cart\Models\Wishlist::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->exists();
    @endphp

    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop Detail</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop Detail</li>
        </ol>
    </div>

    <!-- Single Page Header End -->


    <!-- Single Product Start -->
    <div class="container-fluid py-3 mt-3">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                @if ($product->banner_img)
                                    <img src="{{ asset($product->banner_img) }}" class="img-fluid w-100 rounded-top"
                                        alt="">
                                @else
                                    <img src="{{ asset('img/bike.webp') }}" class="img-fluid w-100 rounded-top"
                                        alt="">
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">{{ $product->brand->name }} {{ $product->model }}</h4>
                            <p class="mb-3">year: {{ $product->year }}</p>
                            <h5 class="fw-bold mb-3">${{ $product->price }}</h5>
                            <p class="mb-4">{{ $product->description }}</p>
                            <div class="input-group quantity mb-5" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border disabled">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center border-0"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border disabled">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="{{ route('cart.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" name="addToCart"
                                    class="btn border border-secondary rounded-pill px-3 py-1 mb-1 text-primary"><i
                                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button"
                                        role="tab" id="nav-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-about" aria-controls="nav-about"
                                        aria-selected="true">Overview</button>
                                    <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                        id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                        aria-controls="nav-mission" aria-selected="false">Addition Information</button>
                                </div>

                            </nav>
                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel"
                                    aria-labelledby="nav-about-tab">

                                    <div class="container px-4 py-5" id="icon-grid">

                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 py-3">
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/engine.png" alt="gear" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Engine</h3>
                                                    <p>250 CC</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/gear.png" alt="gear" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Gear</h3>
                                                    <p>Upto 5 gear</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/speed.png" alt="speed" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Top Speed</h3>
                                                    <p>70 km/hr</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/fuel.png" alt="fuel" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Feul Capacity</h3>
                                                    <p>15 ltrs</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/milage.png" alt="milage" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Mileage</h3>
                                                    <p>20km/L</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-start">
                                                <img src="/img/icon/wheel.png" alt="wheel" width="48"
                                                    height="48">
                                                <div class="px-3">
                                                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Break</h3>
                                                    <p>Disc Break</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-mission" role="tabpanel"
                                    aria-labelledby="nav-mission-tab">
                                    <p>{{ $product->description }} </p>

                                    <div class="px-2">
                                        <div class="row g-4">
                                            <div class="col-6">
                                                <div
                                                    class="row bg-secondary text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Condition</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->condition }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Gear</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->gear }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-secondary text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Suspension</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->suspension }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Break</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->break }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-secondary align-items-center text-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Address</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->address }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-light text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Delivery</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->deliveryOption }}</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row bg-secondary text-center align-items-center justify-content-center py-2">
                                                    <div class="col-6">
                                                        <p class="mb-0">Colour</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-0">{{ $product->colour }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h4>Categories</h4>
                                <ul class="list-unstyled fruite-categorie">
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#">Bajaj</a>
                                            <span>(3)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#">TVS</a>
                                            <span>(5)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#">Honda</a>
                                            <span>(2)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#">Yamaha</a>
                                            <span>(8)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="#">Royal Enfield</a>
                                            <span>(5)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="fw-bold mb-0">Related products</h1>
            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="{{ asset('img/bike.webp') }}" class="img-fluid w-100 rounded-top"
                                    alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute"
                                style="top: 10px; right: 10px;">
                                {{ $relatedProduct->owner }}
                            </div>
                            <div class="p-4 pb-0 rounded-bottom text-center">
                                <h5>{{ Str::limit($relatedProduct->year . ' ' . $relatedProduct->brand->name . ' ' . $relatedProduct->model, 18) }}
                                </h5>
                                <p class="text-dark fs-8 mb-0">{{ $relatedProduct->distance }}km &bull;
                                    {{ $relatedProduct->body_type }} &bull;
                                    {{ $relatedProduct->type }}</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">${{ $relatedProduct->price }}</p>
                                </div>
                                <div class="d-flex justify-content-between flex-lg-wrap mt-3 mb-3">
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $relatedProduct->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" name="addToCart"
                                            class="btn border border-secondary rounded-pill px-3 py-1 mb-1 text-primary"
                                            {{ $inCart ? 'disabled' : '' }}>
                                            <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                            {{ $inCart ? 'In Cart' : 'Add to Cart' }}
                                        </button>
                                    </form>
                                    <form action="{{ route('wishlist.create', ['id' => $relatedProduct->id]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="" {{ $inWishlist ? 'disabled' : '' }}>
                                            <i
                                                class="fa fa-heart fa-2x {{ $inWishlist ? 'text-secondary' : '' }}"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->
</x-app-layout>
