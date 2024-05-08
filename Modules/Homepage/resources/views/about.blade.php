<x-app-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">About Us</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">About Us</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Featurs Section Start -->
            <div class="container-fluid featurs">
                <div class="container py-5">
                    <h1 class="display-5 mb-5 text-dark text-center">Our Main Features</h1>
                    <div class="row g-4">
                        <x-card-feature icon="fas fa-car-side " feature="Secure Shipment" desc="Secure Shipment" />
                        <x-card-feature icon="fas fa-user-shield " feature="Security Payment"
                            desc="100% security payment" />
                        <x-card-feature icon="fas fa-exchange-alt" feature="30 Day Return"
                            desc="30 day money guarantee" />
                        <x-card-feature icon="fas fa-phone-alt " feature="24/7 Support"
                            desc="Support every time fast<" />
                    </div>
                </div>
            </div>
            <!-- Featurs Section End -->
            {{-- Our team --}}
            <div class="row">
                <h1 class="display-5 mb-5 text-dark text-center">Our Team</h1>
                <div class="col-sm-6 col-lg-4 mb-3 mb-sm-0">
                    <div class="card" style="width: 25rem">
                        <img src="{{ asset('/img/profile.png') }}" alt="" loading="lazy">
                        <div class="card-body">
                            <h3 class="text-center">
                                Kiran Shreshta
                            </h3>
                            <p class="text-dark text-center fs-8 mb-0">CAB &bull; Full Stack Developer &bull;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3 mb-sm-0">
                    <div class="card" style="width: 25rem">
                        <img src="{{ asset('/img/profile.png') }}" alt="">
                        <div class="card-body">
                            <h3 class="text-center">
                                Biraj Pudasaini
                            </h3>
                            <p class="text-dark text-center fs-8 mb-0">CAB &bull; Back End Developer &bull;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3 mb-sm-0">
                    <div class="card" style="width: 25rem">
                        <img src="{{ asset('/img/profile.png') }}" alt="">
                        <div class="card-body">
                            <h3 class="text-center">
                                Aadarsh Tamang
                            </h3>
                            <p class="text-dark text-center fs-8 mb-0">CAB &bull; Marketing & Development &bull;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Our team section end --}}

        </div>
    </div>
    <!-- About End -->

    {{-- Testimonial --}}
    <x-testimonial />
    {{-- Testimonial end --}}

    {{-- faq starts --}}
    <x-faq />
    {{-- faq ends --}}

</x-app-layout>
