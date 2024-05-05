
<div class="col-md-6 col-lg-6 col-xl-4">
    <div class="rounded position-relative fruite-item">
        <div class="fruite-img">
            <a href="{{ route('product.show', $product->id) }}">
                {{-- <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid w-100 rounded-top"
                    alt=""> --}}
                <img src="img/bike.jpg" class="img-fluid w-100 rounded-top" alt="">
            </a>
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">
            {{ $product->owner }}
        </div>
        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
            <h5>{{ Str::limit("$product->year $product->brand $product->model", 18) }}</h5>
            <p class="text-dark fs-8 mb-0">{{ $product->distance }}km &bull; {{ $product->body_type }} &bull;
                {{ $product->type }}</p>
            <div class="d-flex justify-content-between flex-lg-wrap">
                <p class="text-dark fs-5 fw-bold mb-0">${{ $product->price }}</p>
            </div>
            <div class="d-flex justify-content-between flex-lg-wrap">
                <form action="{{ route('cart.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="addToCart"
                        class="btn border border-secondary rounded-pill px-3 py-1 mb-1 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                </form>
                <form action="{{ route('wishlist.create', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="">
                        <i class="fa fa-heart fa-2x me-2"></i> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
