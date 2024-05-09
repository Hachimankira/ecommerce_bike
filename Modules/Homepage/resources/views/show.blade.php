<x-app-layout>
    <!--Bread Crumbs  -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop By Brands</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Brand</a></li>
            <li class="breadcrumb-item active text-white">{{ $brand->name }}</li>
        </ol>
    </div>

    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="d-flex align-items-center">
                            <!-- Make sure to use the singular `$brand` since it's a single brand instance -->
                            <h1 class="vertical me-3"> {{ $brand->name }} Bikes</h1>
                            <img src="{{ $brand->image }}" alt="brand img" width="50%">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4">
                            <!-- Ensure `$brand->products` is correctly iterating over products if such a relationship exists -->
                            @if ($brand->products && $brand->products->count() > 0)
                                @foreach ($brand->products as $product)
                                    <x-card-shop :product="$product" />
                                @endforeach
                            @else
                                <p>No products available for this brand.</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Fact Start -->

    <!-- Fact Start -->


    <!--testimonial Start-->
    {{-- <x-testimonial /> --}}
    <!--testimonial End-->
</x-app-layout>
