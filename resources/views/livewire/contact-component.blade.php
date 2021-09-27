<main>
    <div id="error">
        <div class="error-page container" style="    text-align: center;" >
            <div class="col-md-8 col-12 offset-md-2">

                <div class="text-center" style="font-family: 'Aldrich' ,sans-serif;">
                    <h1 class="error-title " >Need Assistance ?</h1>

                   <p class='fs-5 text-gray-600'>We provide 24/7 support, you can contact us here:</p>
                    <div id="pay" class="pay">
                        <div class="all">

                        <button data-name="stripe" onclick="btnClick(this)"  class="list-group-item list-group-item-action" >
                          <div class="d-flex w-100 justify-content-between">
                            <div style="text-align:center; width:100%">
                                <img src="{{asset('discord.png')}}" title="24/7 online server" style="width: 70px;"/><br>
                                Discord
                          </div >
                          </div>
                        </button>
                        <button data-name="stripe" onclick="btnnClick(this)"  class="list-group-item list-group-item-action" >
                            <div class="d-flex w-100 justify-content-between">
                              <div style="text-align:center; width:100%">
                                  <img src="{{asset('support.png')}}" style="width: 70px;"/><br>
                                  Live Support
                            </div >
                            </div>
                          </button>

                        </div>

                    </div>
                </div>


                <div id="error">

                    <h2>Check our frequently asked questions !</h2>
                    <div class="alll">
                    <button data-name="faq" onclick="btnClick(this)"  class="list-group-item list-group-item-action hey" >
                        <div class="d-flex w-100 justify-content-between">
                          <div style="text-align:center; width:100%">
                              <img src="{{asset('faq.png')}}" style="width: 70px;"/><br>
                              FAQ
                        </div >
                    </div>
                        </div>
                      </button>
                      <a href="{{route('/')}}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>

            </div>
        </div>

    </div>


</main>
<script>
    function btnClick(btn)
    {
window.location= "https://discord.gg/cfsUgEdwFC"
    }
    function btnnClick(btn)
    {
//
    }
    </script>
