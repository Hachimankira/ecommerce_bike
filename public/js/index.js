paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: total
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace(window.routes.success)
        })
    },
    // onCancel: function (data) {
    //     window.location.replace(window.routes.cancel)
    // }
}).render('#paypal-payment-button');