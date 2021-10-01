<style>


    </style>

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


              <div class="items"><

                <span class="item active"  data-name="all"  onclick="window.location.href='{{asset('accounts')}}'">ALL</span>
           <span class="item "  data-name="unranked"  onclick="window.location.href='{{route('unranked')}}'">Unranked Accounts</span>
              <span class="item" data-name="regular" onclick="window.location.href='{{route('regular')}}'">Regular Accounts</span>
              <span class="item" data-name="botted" onclick="window.location.href='{{route('botted')}}'">Botted Accounts</span>

              </div>

            </nav>
            <nav class="servers">
              <div class="itemss">
                <span id="all"   class="item1 active"  data-name="all"  onclick="btnClick(this)">ALL</span>
                <span id="span-euw"   class="item1"  data-name="euw"  onclick="btnClick(this)">EUW</span>
                <span id="span-na" class="item2" data-name="na" onclick="btnClick(this)">NA</span>
                <span id="span-eune" class="item5" data-name="eune" onclick="btnClick(this)">EUNE</span>
                <span id="span-oce" class="item6" data-name="oce" onclick="btnClick(this)">OCE</span>
                <span id="span-tr" class="item3" data-name="tr" onclick="btnClick(this)">TR</span>
              <span id="span-br" class="item4" data-name="br" onclick="btnClick(this)">BR</span>



                </span>


              </div>
            </nav>

<hr>






{{--
                    <div onclick="window.location.href='{{route('product.details',$product->slug)}}'" id="{{$product->short_description}}" class="activities-grid-item bla" style=" background-image: url({{asset('/imagg/accounts')}}/{{$product->image}}"  >

                      <h1 class="activities-h1">
        {{$product->short_description}}
                      </h1>


                          <h6 class="iconss">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                          </h6>

                          <div class="card-stuff">

                            <p class="card-text">{{$product->name}}</p>
                            <span class="price">{{$product->regular_price}}$</span>

                        </div>


                    </div> --}}



                    <div id="Accounts" class="activities-grid">
                    @foreach ($products as $product)

                    <div onclick="window.location.href='{{route('product.details',$product->slug)}}'" class="contenedorCards" id="{{$product->short_description}}">
                        <div class="carte">
                          <div class="wrapper">
                            <div class="colorProd" style="background: url({{asset('test1.jpg')}})"></div>
                            <div class="imgProd" style="background-image: @if($product->account_type === "1")url({{asset('/imagg/accounts')}}/{{"unranked.png"}}@elseif($product->account_type === "2")url({{asset('/imagg/accounts')}}/{{"botted.png"}}@elseif($product->ranked ==="1" && $product->account_type === "3" )url({{asset('/imagg/accounts')}}/{{"bronze.png"}}@elseif($product->ranked === "2" && $product->account_type === "3")url({{asset('/imagg/accounts')}}/{{"silver.png"}}@elseif($product->ranked==="3" && $product->account_type === "3")url({{asset('/imagg/accounts')}}/{{"gold.png"}}@elseif($product->ranked ==="4" && $product->account_type === "3")url({{asset('/imagg/accounts')}}/{{"plat.png"}}@elseif($product->ranked ==="5" && $product->account_type === "3")url({{asset('/imagg/accounts')}}/{{"diam.png"}}@elseif($product->ranked=== "6" && $product->account_type ==="3")url({{asset('/imagg/accounts')}}/{{"master.png"}}@elseif($product->ranked ==="7")url({{asset('/imagg/accounts')}}/{{"challenger.png"}}   @endif"></div>
                            <div class="infoProd">
                              <p class="nombreProd">{{$product->name}}</p>
                              <p class="extraInfo">{{$product->skins}} Skins, {{$product->icons}} Icons, URF: {{$product->ranked}}, <br>{{$product->ward}} Ward Skins, Server: {{$product->short_description}}</p>
                              <div class="actions">
                                <div class="preciosGrupo">

                                  <p class="precio precioProd">{{$product->regular_price}}$</p>
                                </div>

                                <div class="icono action alCarrito">
                                  <svg class="inCart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                    <title>Quitar del carrito</title>
                                    <path d="M30 22H12M2 6h6l10 40h32l3.2-9.7"></path>
                                    <circle cx="20" cy="54" r="4"></circle>
                                    <circle cx="46" cy="54" r="4"></circle>
                                    <circle cx="46" cy="22" r="16"></circle>
                                    <path d="M53 18l-8 9-5-5"></path>
                                  </svg>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
 </div>
                @endforeach
</div>


        </div>
    </div>
  </section>
  <section class="pagination">
      <ul class="wrap-pagination-info">
      {{$products->links()}}

    </div>
  </section>

</main>
