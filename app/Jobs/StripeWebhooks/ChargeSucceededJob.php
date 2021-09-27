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
use Illuminate\Support\Facades\Auth;

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

    public function handle()
    {
$charge = $this->webhookCall->payload['data'];
$user = Auth::user();
if($user) {
      Payment::create([
          'user_id' => $user->id,
          'stripe_id' =>$charge['id'],
          'amount' => $charge['amount'],
          'product_id' =>$charge['balance_transaction'],

      ]);
      }
        // you can access the payload of the webhook call with `$this->webhookCall->payload`
    }

}
