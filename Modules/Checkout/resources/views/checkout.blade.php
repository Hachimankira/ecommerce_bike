
    <div class="container-fluid featurs py-10 top-10">
        <div id="paypal-payment-button" class="container py-10"></div>
    </div>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AbijuJZ3znQTbK0DGkmaZaEnAb3RaONpYjebW__1DRklZwC6b8x6ON6ELCS2lf2AltEwJtCHKoXH57y3&components=buttons">
    </script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        window.routes = {
            success: "{{ route('cart.success') }}"
            // cancel: "{{ route('cart.cancel') }}"
        };
    </script>

