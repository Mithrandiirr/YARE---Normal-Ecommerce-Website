<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {
        if($request->type === "charge.succeeded"){
            try{

    Payment::create([
       'stripe_id' => $request->data['object']['id'],
        'amount' => $request->data['object']['amount'],
        'email' => $request->data['object']['billing_details']['email'],
        'name' => $request->data['object']['billing_details']['name'],
        'price_id' => DB::table('products')->where('slug', $this->slug)->value('price_id')
    ]);
   } catch (\Exception $e) {
               return $e->getMessage();
           }

        }
    }






}
