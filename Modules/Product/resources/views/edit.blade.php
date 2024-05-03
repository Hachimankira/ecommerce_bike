<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>
    <div class="container-fluid fruite py-5 bg-white">
        <div class="product-container py-5">
            <x-form-editproduct :product="$product"/>
        </div>
    </div>
</x-app-layout>
