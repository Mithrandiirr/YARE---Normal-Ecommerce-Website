<?php

namespace App\Jobs\StripeWebhooks;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\Models\WebhookCall;

class ChargeSucceededJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $webhookCall;
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    public function handle(Request $request)
    {
$charge = $this->webhookCall->payload['data']['object'];

if($request->type === 'charge.succeeded') {
      Payment::create([
          'stripe_id' => $request->data['object']['id'],
          'stripe_id' =>$charge['id'],
          'product_id' =>$charge['currency'],
          'amount' => $charge['amount'],


      ]);
      }
        // you can access the payload of the webhook call with `$this->webhookCall->payload`
    }

}

