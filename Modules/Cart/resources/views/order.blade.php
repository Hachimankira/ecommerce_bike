<x-app-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">My Orders</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">My Orders</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    {{-- order section --}}
    <div class="container-fluid py-5">
        <div class="container py-5">
            <x-card-order />
        </div>
    </div>
</x-app-layout>
