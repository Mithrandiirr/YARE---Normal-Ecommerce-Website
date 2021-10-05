<?php
require_once(__DIR__.'/../../../vendor/autoload.php');


\Stripe\Stripe::setApiKey('sk_test_51JX1BnCwSqIoxRpKte18TcaGSEegx1UX1NKYaKGDCwFkbyDWeYiQW4cKgy7OGbzsiSsOSFZaWr7AGeqRimsk5sdA00Xx6yZJhn');


$session = \Stripe\Checkout\Session::create([
    'success_url' => 'https://example.com/success',
  'cancel_url' => 'https://example.com/cancel',
  'payment_method_types' => ['card'],
  'line_items' => [
    [
      'price' => $price_id,

      'quantity' => 1,
    ],
  ],
  'mode' => 'payment',
  ]);
//     'payment_method_types' => ['card'],

//     'line_items' => [[

//       'price_data' => [
//         'currency' => 'usd',
//         'product_data' => [
//           'name' => 'T-shirt',
//         ],
//         'unit_amount' => 2000,
//       ],
//       'quantity' => 1,

//     ]],

//     'mode' => 'payment',
//     'success_url' => 'https://example.com/success',
//     'cancel_url' => 'https://example.com/cancel',
//   ]);

?>
<main>

    <div id="hey" class="alert alert-warning alert-dismissible fade show" role="alert">
Demo Payments (TEST MODE ONLY)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="list-group" style="    margin: 100px 120px;">
    <h3>Account ID: #{{$product->id}}</h3>
    <h3>Account ID: #{{auth()->user()->name}}</h3>
    <h1 style="align-self: center">Payment Method</h1>
    <div id="pay" class="pay">
    <div class="all">

    <button data-name="stripe" onclick="btnClick(this)"  class="list-group-item list-group-item-action" >
      <div class="d-flex w-100 justify-content-between">
        <div style="text-align:center; width:100%">
            <img src="{{asset('imagg/accounts/Stripe-Logo.png')}}" style="width: 70px;"/><br>
      </div >
      </div>
    </button>
    <button data-name="skrill" onclick="btnClick(this)"  class="list-group-item list-group-item-action" >
      <div class="d-flex w-100 justify-content-between">
        <div style="text-align:center; width:100%">
            <img src="{{asset('imagg/accounts/skrill.png')}}" style="width: 50px;"/><br>
      </div >

      </div>

    </button>
    </div>

</div>
<div class="bill">
<h3>Total:{{$product->regular_price}} $</h3>
</div>
<form id="form1" class="n-chk" style="margin-bottom:1em ;text-align:center;">
    <label class="new-control new-checkbox checkbox-primary">
      <input type="checkbox" required  >

    <span class="new-control-indicator"></span>
      <span class="text-dark"> I agree to the
      <a href="#" target="_blank" class="text-primary px-1" style="text-decoration: none;">Terms of Use </a> &
      <a href="#" target="_blank" class="text-primary px-1" style="text-decoration: none;">Privacy Policy </a>
      </span>

      </label>
      <input type="submit" id="submitBtn" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">
  </form>
  {{-- <div id="paypal-button-container"></div> --}}















         </main>
         <script src="https://js.stripe.com/v3/"></script>
         <script src="https://www.paypal.com/sdk/js?&client-id=AepLn_pHGVyanKtrWo0ls231oEc5DqftVfEMh-szpDCFwq_u7SfBN4Qza0DEU_cX0UXvCqx66-KRxXLf&currency=USD" data-namespace="paypal_sdk"></script>
         <script>

paypal_sdk.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{

          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
        return window.location= "{{asset('/success')}}"
      });
    }
  }).render('#paypal-button-container');
             </script>
    {{-- <script type = "text/javascript">
          $(document).ready(function() {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
          });

      $('.btn-block').click(function() {
        var amount = $('.amount').val();
        var handler = StripeCheckout.configure({
            key: '{{env('STRIPE_KEY')}}', //your publisher key id
            locale: 'auto',
            token: function(token) {
                //You can access the token ID with `token.id`.
                //Get the token ID to your server-side code for use.
                $('#res_token').html(JSON.stringify(token));
                $.ajax({
                    url: '{{ url("payment-process") }}',
                    method: 'post',
                    data: {
                        tokenId: token.id,
                        amount: 27
                    },
                    success: (response) => {
                        console.log(response)
                    },
                    error: (error) => {
                        console.log(error);
                        alert('Oops! Something went wrong')
                    }
                })
            }
        });
        handler.open({
            name: 'Payment Demo',
            description: 'NiceSnippets',
            amount: amount * 100
        });
      }) --}}
<script>
//  const stripee = document.getElementById("stripe-test")
//     stripee.addEventListener('click', function(e) {
//         e.preventDefault();
//         fetch('/nyoho', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//             },
//             body: JSON.stringify(data),
//         })
//         .then((response) => response.json())
//         .then((data) =>{
//             console.log('Success', data);
//         })
//         .catch((error) => {
//             console.error('Error',error);
//         })
//     })

      function btnClick(btn){
        var stripe = Stripe("pk_test_51JX1BnCwSqIoxRpKqaWSy6nwkGvHgOeaDni97F6R5VGaRi6G8s1BkAty6QNiwuJxtVbrvzlMLPF2OPPFMH3EbZmq00DMLewtGE");
        const name = btn.getAttribute('data-name');

        switch (name){
                case 'paypal' :
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()

                    location = "TEST.com";
                  })
                  break;
                  case 'stripe':
                  document.getElementById("form1").addEventListener("submit",e => {
                        e.preventDefault();
                        stripe.redirectToCheckout({
                            sessionId: "<?php echo $session->id; ?>"
                          });
                        });
                        break;
                case 'payop':
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()
                    location = "TEST.com";
                  })
                  break;
                case 'skrill':
                document.getElementById("form1").addEventListener("submit",e => {
                    e.preventDefault()
                    location = "";
                  })
                  break;
                case 'bpayment' :
                    document.getElementById("form1").addEventListener("submit",e => {
                        e.preventDefault()
                        location = "TEST.com";
                      })
                      break;
                case 'paysera' :
                    document.getElementById("form1").addEventListener("submit",e => {
                        e.preventDefault()
                        location = "HH.com";
                      })
                      break;
                      default:
        }

    }
</script>
