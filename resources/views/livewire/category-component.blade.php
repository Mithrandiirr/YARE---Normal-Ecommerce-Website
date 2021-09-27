
<main>

    <section class="hero">
    <div class="container">

      <div class="main-message">
        <h1>Unranked Accounts </h1>
        <p>Cheapest Accounts And Best Services
        </p>

      </div>
    </div>
    <div class="home-buttons">


    </div>

  </section>

  <div class="container">
      <div class="little-heading">
          <div class="wrapper">
        <nav>
              <div class="items">
                <span class="item active"  data-name="unranked"  onclick="window.location.href={{asset('/accounts')}}">Unranked Accounts</span>
                <span class="item" data-name="regular" onclick="window.location.href=''">Regular Accounts</span>
                <span class="item" data-name="botted" onclick="window.location.href='botted-accs.html'">Botted Accounts</span>

              </div>
            </nav>
            <nav class="servers">
              <div class="itemss">
                  @foreach ($categories as $category)


                {{-- <span id="span-euw"   class="item"  data-name="euw"  onclick="btnClick(this)">EUW</span>
                <span id="span-na" class="item" data-name="na" onclick="btnClick(this)">NA</span>
                <span id="span-tr" class="item" data-name="tr" onclick="btnClick(this)">TR</span>
              <span id="span-br" class="item" data-name="br" onclick="btnClick(this)">BR</span>
                <span id="span-eune" class="item" data-name="eune" onclick="btnClick(this)">EUNE</span>
                <span id="span-oce" class="item" data-name="oce" onclick="btnClick(this)">OCE</span> --}}


             <span id="span-{{$category->name}}" data-name="{{$category->name}}"   onClick="window.location.href='{{route('product.category',['category_slug'=>$category->slug])}}'" >{{$category->name}}

                </span>

                @endforeach
              </div>
            </nav>
            <div class="sort-item order-by">
              <select name="orderby" class="use-chosen" wire:model="sorting">
                  <option value="default" selected="selected" >Default Sorting</option>
                  <option value="date"  >Sort by newness</option>
                  <option value="price_desc"  >Sort by Price: high to low</option>
                  <option value="price"  >Sort by Price: low to high</option>

              </select>
            </div>
      </div>

      <div id="Accounts" class="activities-grid">

          @foreach ($products as $product)
        <!-- grid item #1 -->
        <a href="{{route('product.details',$product->slug)}}">
        <div id="euw" class="activities-grid-item bla" style=" background-image: url({{asset('imagg/accounts')}}/{{$product->image}}" >
          <h1 class="activities-h1">
    EUW
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>

                       <div class="card-stuff">

                    <p class="card-text">{{$product->name}}</p>
                    <span class="price">{{$product->regular_price}}</span>
                    ?>
                </div>
        </div>
    </a>
        @endforeach


     <!-- grid item #2 -->
         {{-- <div id="euw" class="activities-grid-item bla1" style="display: none">
          <h1 id="activities-h1">
            EUW
                  </h1>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>
        </div>


                       <div class="card-stuff">
                    <p class="card-text">
                        {{$product->name}}
                    </p>

                    <span class="price">
                        {{$product->regular_price}}$
                    </span>
                </div>
        </div> --}}
     {{-- <!-- grid item #3 -->
        <div id="euw" class="activities-grid-item bla3" style="display: none">
          <h1 id="activities-h1">
            EUW
                  </h1>
                   <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>
        </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        {{$product->name}}
                    </p>
                    <span class="price">
                        {{$product->regular_price}}
                    </span>
                </div>
        </div> --}}
        {{-- <!-- grid item #1 -->
        <div id="euw" class="activities-grid-item bla4" style="display: none">
          <h1 id="activities-h1">
            EUW
                  </h1>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>
        </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div> --}}
     <!-- grid item #2 -->
     <div id="Accounts1" class="activities-grid">
        @foreach ($products as $product)
        <div id="na" class="activities-grid-item bla5" style="display: none;  background-image: url({{asset('imagg/test')}}/{{$product->image}}" >
          <h1 class="activities-h1">
            NA
                  </h1>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>
        </div>
                       <div class="card-stuff">
                    <p class="card-text">
                      {{$product->category_id}}
                    </p>
                    <span class="price">
                        {{$product->regular_price}}
                    </span>
                </div>
        </div>
        @endforeach

   {{-- <!-- grid item #3 -->
   <div id="na" class="activities-grid-item bla3" style="display: none">
    <h1 id="activities-h1">
      NA
            </h1>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
  <div class="card-body">

  <h6 class="iconss">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="far fa-star"></i>
  </h6>

  </div>
  </div>
          <div class="card-stuff">
       <p class="card-text">
           All champs level 455 Bronze 5 6548 BE
       </p>
       <span class="price">
           $300
       </span>
   </div>
  </div>
   <!-- grid item #3 -->
   <div id="na" class="activities-grid-item bla3" style="display: none">
    <h1 id="activities-h1">
      NA
            </h1>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
  <div class="card-body">

  <h6 class="iconss">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="far fa-star"></i>
  </h6>

  </div>
  </div>
          <div class="card-stuff">
       <p class="card-text">
           All champs level 455 Bronze 5 6548 BE
       </p>
       <span class="price">
           $300
       </span>
   </div>
  </div>
   <!-- grid item #3 -->
   <div id="na" class="activities-grid-item bla3" style="display: none">
    <h1 id="activities-h1">
      NA
            </h1>
      <div class="col-md-3 col-sm-6 my-3 my-md-0" >
  <div class="card-body">

  <h6 class="iconss">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="far fa-star"></i>
  </h6>

  </div>
  </div>
          <div class="card-stuff">
       <p class="card-text">
           All champs level 455 Bronze 5 6548 BE
       </p>
       <span class="price">
           $300
       </span>
   </div>
  </div> --}}
   <!-- grid item #3 -->
   <div id="Accounts" class="activities-grid">
    @foreach ($products as $product)
   <div id="eune" class="activities-grid-item bla3" style="display: none">
    <h1 id="activities-h1">
      EUNE
            </h1>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
  <div class="card-body">

  <h6 class="iconss">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="far fa-star"></i>
  </h6>

  </div>
  </div>
          <div class="card-stuff">
       <p class="card-text">
           {{$product->name}}
       </p>
       <span class="price">
           $300
       </span>
   </div>
</div>
   @endforeach
  </div>

        <!--INVISIBLE-->
        {{-- <div id="euw" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'">
          <h1 id="activities-h1">
    EUW
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div> --}}
        {{-- <div id="euw" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'">
          <h1 id="activities-h1">
    EUW
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div> --}}
        <div id="tr" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'">
          <h1 id="activities-h1">
   TR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="br" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'">
          <h1 id="activities-h1">
    BR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>

        <div id="oce" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    OCE
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="br" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    BR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="br" class="activities-grid-item bla"  style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    BR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="oce" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    OCE
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="tr" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    TR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        <div id="tr" class="activities-grid-item bla" style="display: none" onclick="window.location.href='page1.html'" >
          <h1 id="activities-h1">
    TR
          </h1>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <div class="card-body">

              <h6 class="iconss">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
              </h6>

          </div>

         </div>
                       <div class="card-stuff">
                    <p class="card-text">
                        All champs level 455 Bronze 5 6548 BE
                    </p>
                    <span class="price">
                        $300
                    </span>
                </div>
        </div>
        </div>

        </div>
    </div>
  </section>
  <section class="pagination">
      <ul class="wrap-pagination-info">
      {{$products->links()}}
      {{-- <ul class="page">
  <a href="#page">
  <li>
      Previous
  </li>
  </a>
  <a href="#page">
      <li>
          Next
      </li>
      </a>
      <a href="#page" class="active">
          <li>
              1
          </li>
          </a>
          <a href="#page">
              <li>
                  2
              </li>
              </a>
              <a href="#page">
                  <li>
                      3
                  </li>
                  </a>
                  <a href="#page">
                      <li>
                          4
                      </li>
                      </a>
                      <a href="#page">
                          <li>
                              5
                          </li>
                          </a>

                              <li>
                                  ...
                              </li>
                              <a href="#page">
                                  <li>
                                      10
                                  </li>
                                  </a>
      </ul> --}}
    </div>
  </section>
  <div class="credit-cards" style="text-align: center; width: 100% ; position: relative; top: 50px;">
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_visa.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_master.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_paypal.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_unionpay.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_linepay.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_tw_711_pay.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_tw_fm_pay.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_taishin.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_amex.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_ecpay.png')}}"/>
    <img height="35" src="{{asset('https://shoplineimg.com/assets/footer/card_jcb.png')}}"/>
  </div>

