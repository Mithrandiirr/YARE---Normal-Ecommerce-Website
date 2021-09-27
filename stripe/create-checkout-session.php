<?php
include './stripe-php/init.php';
// require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('pk_live_51JX1BnCwSqIoxRpK9IBTJHsDYqRs1bSi5J4LxmGAP2lyNN1aqStIAnIEfFtop7ZyN9GeetuwjOgncJHqyhHOBytC00vUNPHEqS');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://127.0.0.1:8000/stripe';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # TODO: replace this with the `price` of the product you want to sell
    'price' => '{{PRICE_ID}}',
    'quantity' => 1,
  ]],
  'payment_method_types' => [
    'card',
  ],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
