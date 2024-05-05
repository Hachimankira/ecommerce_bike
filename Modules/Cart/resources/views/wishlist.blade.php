<x-app-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Wishlist</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Wishlist</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    {{-- wishlist section --}}
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="col-lg-12">
                <div class="row g-4 justify-content-start">
                    @foreach ($wishlists as $wishlist)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <a href="{{ route('product.show', $wishlist->product->id) }}">
                                        {{-- <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid w-100 rounded-top"
                                        alt=""> --}}
                                        <img src="img/bike.jpg" class="img-fluid w-100 rounded-top" alt="">
                                    </a>
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">
                                    {{ $wishlist->product->owner }}
                                </div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    {{-- <h5>{{ Str::limit(" $wishlist->product->year $wishlist->product->brand $wishlist->product->model", 18) }}</h5> --}}
                                    <h5>{{ $wishlist->product->year }} {{ $wishlist->product->brand }} {{ $wishlist->product->model }}</h5>
                                    <p class="text-dark fs-8 mb-0">{{ $wishlist->product->distance }}km &bull;
                                        {{ $wishlist->product->body_type }} &bull;
                                        {{ $wishlist->product->type }}</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <p class="text-dark fs-5 fw-bold mb-0">${{ $wishlist->product->price }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        <form action="{{ route('cart.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" name="addToCart"
                                                class="btn border border-secondary rounded-pill px-3 py-1 mb-1 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</button>
                                        </form>
                                        <form action="{{ route('wishlist.create', ['id' => $wishlist->product->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="">
                                                <i class="fa fa-times fa-2x me-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
