<main>
    <div id="hey" class="alert alert-warning alert-dismissible fade show" role="alert">
        Once your payment is successful , you will receive an email which has your account details for security purposes!<br>
        Skrill Payments are not working temporarily !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="list-group" style="    margin: 100px 120px;">
    <h1 style="align-self: center">Payment Method</h1>
    <div id="pay" class="pay">
    <div class="all">

    <button data-name="stripe" onclick="btnClick(this)"  class="list-group-item list-group-item-action" >
      <div class="d-flex w-100 justify-content-between">
        <div style="text-align:center; width:100%">
            <img src="{{asset('imagg/accounts/stripe-logo.png')}}" style="width: 70px;"/><br>
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
  <div id="paypal-button-container"></div>















         </main>

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



