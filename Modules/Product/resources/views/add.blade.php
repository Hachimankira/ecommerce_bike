<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>
    <div class="container-fluid fruite py-5 bg-white">
        <div class="product-container py-5">
            <x-form-product :brands="$brands"/>
        </div>
    </div>
    <!-- @push('scripts')
    <script>
        document.getElementById('brand').addEventListener('change', function() {
            var brandId = this.value;
            fetch(`/get-bike-models/${brandId}`)
                .then(response => response.json())
                .then(data => {
                    var modelSelect = document.getElementById('bikeModel');
                    modelSelect.innerHTML = '<option value="">Select model</option>';
                    data.forEach(function(model) {
                        var option = new Option(model.name, model.id);
                        modelSelect.add(option);
                    });
                })
                .catch(error => console.error('Error loading the bike models:', error));
        });
    </script>
    @endpush -->
</x-app-layout>