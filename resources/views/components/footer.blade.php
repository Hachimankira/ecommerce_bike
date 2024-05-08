<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#">
                        <h1 class="text-primary mb-0">Bikes</h1>
                        <p class="text-secondary mb-0">Buy and Sell Bikes</p>
                    </a>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="position-relative mx-auto">
                        <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                        <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                    </div> --}}
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Why People Like us!</h4>
                    <p class="mb-4">
                        With a wide selection, quality assurance, easy buying process, competitive prices, 
                        convenient selling options, and secure transactions, we make it simple and safe 
                        to find the perfect bike or sell yours hassle-free.</p>
                    {{-- <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Shop Info</h4>
                    <a class="btn-link" href="{{route ('about')}}">About Us</a>
                    <a class="btn-link" href="{{route ('contact')}}">Contact Us</a>
                    <a class="btn-link" href="{{route ('about')}}">Privacy Policy</a>
                    <a class="btn-link" href="{{route ('about')}}">Terms & Condition</a>
                    <a class="btn-link" href="{{route ('about')}}">Return Policy</a>
                    <a class="btn-link" href="{{route ('about')}}">FAQs & Help</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Account</h4>
                    <a class="btn-link" href="{{route ('profile.edit')}}">My Account</a>
                    <a class="btn-link" href="{{route ('store.index')}}">Shop details</a>
                    <a class="btn-link" href="{{route ('cart.index')}}">Shopping Cart</a>
                    <a class="btn-link" href="{{route ('wishlist')}}">Wishlist</a>
                    <a class="btn-link" href="{{route ('myorders')}}">Order History</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Contact</h4>
                    <p>Address: Kathmandu, Nepal</p>
                    <p>Email: kiran9860819025@gmail.com</p>
                    <p>Phone: 9860819025</p>
                    <p>Payment Accepted</p>
                    <img src="img/payment.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BikeHub</a>, All right reserved.</span>
            </div>
            
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>  