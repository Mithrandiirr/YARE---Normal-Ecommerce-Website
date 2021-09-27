<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripePost(Request $request)
    {
        $validated = $request->validated();

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken
        ]);

        Session::flash('success', 'Payment successful!');

        return redirect()->route('payment.done');
    }






}
