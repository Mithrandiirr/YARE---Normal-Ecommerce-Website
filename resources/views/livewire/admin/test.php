<?php
\Stripe\Stripe::setApiKey('sk_test_51JX1BnCwSqIoxRpKte18TcaGSEegx1UX1NKYaKGDCwFkbyDWeYiQW4cKgy7OGbzsiSsOSFZaWr7AGeqRimsk5sdA00Xx6yZJhn');

$product = \Stripe\Product::create([
  'name' => 'Starter Setup',
]);
?>
