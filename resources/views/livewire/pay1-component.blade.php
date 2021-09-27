<main>
    <div class="list-group" style="    margin: 100px 250px;">
        <h1 style="align-self: center">Payment Method</h1>
        <div id="pay" class="pay">
        <div class="all">
        <button data-name="paypal" onclick="btnClick(this)"  id="paypal"  class="list-group-item list-group-item-action" aria-current="true">
    <div>
          <img src="{{asset('imagg/accounts/paypal_2014_logo.png')}}" style="width: 50px;"/><br>
    </div >
    </button>
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
        <div class="all">
        <button data-name="bpayment" onclick="btnClick(this)"  class="list-group-item list-group-item-action" >
            <div class="d-flex w-100 justify-content-between">
              <div style="text-align:center; width:100%">
                  <img src="{{asset('imagg/accounts/bpayment.png')}}" style="width: 100px;"/><br>
            </div >

            </div>

        </button>
          <button data-name="payop" onclick="btnClick(this)"  class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <div style="text-align:center; width:100%">
                  <img src="{{asset('imagg/accounts/payop.png')}}" style="width: 70px;"/><br>
            </div >

            </div>

        </button>
          <button data-name="paysera" onclick="btnClick(this)"  class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <div style="text-align:center; width:100%">
                  <img src="{{asset('imagg/accounts/paysera.png')}}" style="width: 100px;"/><br>
            </div >

            </div>

        </button>
      </div>

    </div>
    <div class="bill">
    <h3>Total:  {{$product->regular_price}}$</h3>
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

    </div>


    </div>
    <div id="paypal-button-container"></div>

    <script

        src="https://www.paypal.com/sdk/js?client-id=AepLn_pHGVyanKtrWo0ls231oEc5DqftVfEMh-szpDCFwq_u7SfBN4Qza0DEU_cX0UXvCqx66-KRxXLf&currency=USD" data-namespace="paypal_sdk"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
      </script>


    {{-- <script>
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
          });
        }
      }).render('#paypal-button');
      //This function displays Smart Payment Buttons on your web page.
      </script> --}}
      <script>


        // Render the PayPal button into #paypal-button-container
        paypal_sdk.Buttons({
     // Call your server to set up the transaction
                 createOrder: function(data, actions) {
                    return fetch('/api/paypal/order/create', {
                        method: 'POST',
                        body:JSON.stringify({
                            'product_id': "{{$product->id}}",
                            'user_id' : "{{auth()->user()->id}}",
                            'amount' : $("#paypalAmount").val(),
                        })
                    }).then(function(res) {
                        //res.json();
                        return res.json();
                    }).then(function(orderData) {
                        //console.log(orderData);
                        return orderData.id;
                    });
                },

                // Call your server to finalize the transaction
                onApprove: function(data, actions) {
                    return fetch('/api/paypal/order/capture' , {
                        method: 'POST',
                        body :JSON.stringify({
                            orderId : data.orderID,
                            payment_gateway_id: $("#payapalId").val(),
                            user_id: "{{ auth()->user()->id }}",
                        })
                    }).then(function(res) {
                       // console.log(res.json());
                        return res.json();
                    }).then(function(orderData) {

                        // Successful capture! For demo purposes:
                      //  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        iziToast.success({
                            title: 'Success',
                            message: 'Payment completed',
                            position: 'topRight'
                        });
                    });
                }

            }).render('#paypal-button-container');

    </script>
    </main>

