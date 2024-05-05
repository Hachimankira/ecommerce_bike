<x-app-layout>  

    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <!-- Make sure to use the singular `$brand` since it's a single brand instance -->
                        <h1>{{ $brand->name }} Bikes</h1>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- Ensure `$brand->products` is correctly iterating over products if such a relationship exists -->
                                    @if($brand->products && $brand->products->count() > 0)
                                    @foreach ($brand->products as $product)
                                    <x-card-product :product="$product" />
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