<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                        class="text-white">Kathmandu, Nepal</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                        class="text-white">Email@Example.com</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="{{ route('about') }}" class="text-white"><small class="text-white mx-2">Privacy
                        Policy</small>/</a>
                <a href="{{ route('about') }}" class="text-white"><small class="text-white mx-2">Terms of
                        Use</small>/</a>
                <a href="{{ route('about') }}" class="text-white"><small class="text-white ms-2">Sales and
                        Refunds</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="{{ url('/home') }}" class="navbar-brand">
                <img src="{{ asset('img/logo1.png') }}" alt="logo" class="img-fluid" style="width: 35%;">
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('home.index') }}" class="nav-item nav-link ">Home</a>

                    <a href="{{ route('store.index') }}" class="nav-item nav-link">Shop</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                        data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search text-primary"></i></button>
                    <a href="{{ route('login') }}" class="btn btn-light">
                        Login
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
