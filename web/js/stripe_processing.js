var handler = StripeCheckout.configure({
    key: 'pk_test_8V7h2SGMHr9hQQSl8AheEc8J',
    image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
    locale: 'auto',
    token: function(token) {
        $.post('{{ url('recapitulatif') }}',
        {id: token.id },
        function(reponse){
            console.log("Token envoyé");
            if (reponse.code == 1) {
                window.location.reload();
            }
        }, "json");
    }
});

document.getElementById('bouton').addEventListener('click', function(e) {
    // Open Checkout with further options:
    handler.open({
        name: 'Musée du Louvre',
        description: 'Réservation',
        zipCode: true,
        currency: 'eur',
        amount: {{ order.total }} * 100
    });
    e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
    handler.close();
});
