@php
    use Illuminate\Support\Str;
@endphp
<x-app-layout>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Bike Shop</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="keywords"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        
                        <div class="col-xl-3">
                            <div class="bg-light  py-3 rounded d-flex justify-content-between mb-4">
                                <form id="fruitform" method="GET">
                                    <label for="fruits">Default Sorting:</label>
                                    <select id="fruits" name="sort" class="border-0 form-select-sm bg-secondary text-white me-3" onchange="this.form.submit()">
                                        <option value="" {{ request()->get('sort') == '' ? 'selected' : '' }}>Nothing</option>
                                        <option value="popularity" {{ request()->get('sort') == 'popularity' ? 'selected' : '' }}>Popularity</option>
                                        <option value="latest" {{ request()->get('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                                        <option value="price_asc" {{ request()->get('sort') == 'price_asc' ? 'selected' : '' }}>Price:Low to High</option>
                                        <option value="price_desc" {{ request()->get('sort') == 'price_desc' ? 'selected' : '' }}>Price:High to Low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>Popular Brand</h4>
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
                                {{-- owner --}}
                                <div class="col-lg-12">
                                    <form id="engineForm" method="GET">
                                        <div class="mb-3">
                                            <h4>Owner</h4>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="first_owner" name="owner" value="first" onchange="this.form.submit()"
                                                {{ request()->get('owner') == 'first' ? 'checked' : '' }}
                                                >
                                                <label for="first_owner"> First</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="second_owner" name="owner" value="second" onchange="this.form.submit()"
                                                {{ request()->get('owner') == 'second' ? 'checked' : '' }}
                                                >
                                                <label for="second_owner"> Second</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="third_owner" name="owner" value="third" onchange="this.form.submit()"
                                                {{ request()->get('owner') == 'third' ? 'checked' : '' }}
                                                >
                                                <label for="third_owner"> Third</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- engine --}}
                                <div class="col-lg-12">
                                    <form id="engineForm" method="GET">
                                        <div class="mb-3">
                                            <h4>Engine</h4>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="150cc" name="engine" value="upto_150cc" onchange="this.form.submit()"
                                                {{ request()->get('engine') == 'upto_150cc' ? 'checked' : '' }}
                                                >
                                                <label for="150cc"> Up to 150CC</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="150to250cc" name="engine" value="150_to_250cc" onchange="this.form.submit()"
                                                {{ request()->get('engine') == '150_to_250cc' ? 'checked' : '' }}
                                                >
                                                <label for="150to250cc"> 150 to 250CC</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="me-2" id="250cc_above" name="engine" value="250cc_and_above" onchange="this.form.submit()"
                                                {{ request()->get('engine') == '250cc_and_above' ? 'checked' : '' }}
                                                >
                                                <label for="250cc_above"> 250CC and above</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                {{-- <div class="col-lg-12">
                                    <h4 class="mb-3">Featured products</h4>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-1.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-2.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="img/featur-3.jpg" class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Big Banana</h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center my-4">
                                        <a href="#"
                                            class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew
                                            More</a>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-start">
                                @foreach ($products as $product)
                                    <x-card-shop :product="$product" />
                                @endforeach
                                {{ $products->links() }}

                                {{-- <div class="col-12">
                                    <div class="pagination d-flex justify-content-center mt-5">
                                        <a href="#" class="rounded">&laquo;</a>
                                        <a href="#" class="active rounded">1</a>
                                        <a href="#" class="rounded">2</a>
                                        <a href="#" class="rounded">3</a>
                                        <a href="#" class="rounded">4</a>
                                        <a href="#" class="rounded">5</a>
                                        <a href="#" class="rounded">6</a>
                                        <a href="#" class="rounded">&raquo;</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->
    @push('scripts')
        <script>
            const rangeInput = document.getElementById('rangeInput');
            const amount = document.getElementById('amount');
            amount.value = rangeInput.value;
            rangeInput.addEventListener('input', function () {
                amount.value = rangeInput.value;
            });

        </script>
        <script>
            document.getElementById('add-to-cart-btn').addEventListener('click', function() {
                this.textContent = 'In Cart';
                this.disabled = true;
            });
        </script>
    @endpush
</x-app-layout>
