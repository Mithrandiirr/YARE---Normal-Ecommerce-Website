<?php
// This example sets up an endpoint using the Slim framework.
// Watch this video to get started: https://youtu.be/sGcNPFX1Ph4.

use Slim\Http\Request;
use Slim\Http\Response;
use Stripe\Stripe;
require_once(__DIR__.'/../../../vendor/autoload.php');

$app = new \Slim\App;

$app->add(function ($request, $response, $next) {
    Stripe\Stripe::setApiKey('sk_test_51JX1BnCwSqIoxRpKte18TcaGSEegx1UX1NKYaKGDCwFkbyDWeYiQW4cKgy7OGbzsiSsOSFZaWr7AGeqRimsk5sdA00Xx6yZJhn');
  return $next($request, $response);
});

$app->post('/nyoho', function (Request $request, Response $response) {
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

  return $response->withHeader('Location', $session->url)->withStatus(303);
});

$app->run();
