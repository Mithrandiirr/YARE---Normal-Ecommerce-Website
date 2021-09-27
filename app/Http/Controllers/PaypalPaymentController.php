<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Srmklive\PayPal\Services\ExpressCheckout;
class PaypalPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function handlePayment()
    {
        $data = [];
$data['products'] = [];
foreach(\accounts::getContent() as $product){
    array_push($data['products'],[
        'name' => $product->name,
        'price' =>$product->regular_price,
    ]);
}

$data['invoice_id'] = 1;
$data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
$data['return_url'] = route('success.payment');
$data['cancel_url'] = route('cancel.payment');

$total = 0;


$data['total'] = $total;
$paypalModule = new ExpressCheckout;

$res = $paypalModule->setExpressCheckout($data);
$res = $paypalModule->setExpressCheckout($data,true);

return redirect($res['paypal_link']);
}

public function paymentCancel()
{
    return redirect()->route('cart.index')->with([
        'info' => 'Order canceled'
    ]);
}

public function paymentSuccess(Request $request){
    $paypalModule = new ExpressCheckout;
    $response = $paypalModule->getExpressCheckoutDetails($request->token);
    if(in_array($response['ACK'],['SUCCESS','SUCCESSWITHWARNING'])){
        foreach(\accounts::getContent() as $product) {
       Order::create([
           "user_id" =>auth()->user()->id,
           "product_name" => $product->name,
           "price" => $product->regular_price,
       ]);
        }
    }
    return redirect()->route('cart.index')->with([
        'success' => 'Paid successfully'
    ]);
}
    }

