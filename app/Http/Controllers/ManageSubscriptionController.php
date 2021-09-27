<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ManageSubscriptionController extends Controller
{
    public function __invoke(Request $request)
    {
        $checkout = $request->user()->currentUser->newSubscription('default', config('stripe.price_id'))->checkout();

        return Inertia::render('User/ManageSubscription', [
            'stripeKey' => config('cashier.key'),
            'sessionId' => $checkout->id
        ]);
    }
}
