<?php
require_once(__DIR__.'/../../../vendor/autoload.php');


\Stripe\Stripe::setApiKey('sk_test_51JX1BnCwSqIoxRpKte18TcaGSEegx1UX1NKYaKGDCwFkbyDWeYiQW4cKgy7OGbzsiSsOSFZaWr7AGeqRimsk5sdA00Xx6yZJhn');
$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
          'name' => 'T-shirt',
        ],
        'unit_amount' => 2000,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://example.com/success',
    'cancel_url' => 'https://example.com/cancel',
  ]);
?>
<html>
  <head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <form action="/create-checkout-session" method="POST">
      <button id="checkout-button" type="submit">Checkout</button>
      <script>
          var stripe = Stripe("pk_test_51JX1BnCwSqIoxRpKqaWSy6nwkGvHgOeaDni97F6R5VGaRi6G8s1BkAty6QNiwuJxtVbrvzlMLPF2OPPFMH3EbZmq00DMLewtGE");
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click',function(e) {
          e.preventDefault();

       stripe.redirectToCheckout({
              sessionId: "<?php echo $session->id; ?>"
            });
          });
          </script>
    </form>
  </body>
</html>

