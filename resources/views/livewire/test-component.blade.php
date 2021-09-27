
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


           <span class="item "  data-name="unranked"  onclick="window.location.href='{{route('unranked')}}'">Unranked Accounts</span>
              <span class="item" data-name="regular" onclick="window.location.href='{{route('regular')}}'">Regular Accounts</span>
              <span class="item" data-name="botted" onclick="window.location.href='{{route('botted')}}'">Botted Accounts</span>

              </div>

            </nav>
            <nav class="servers">
              <div class="itemss">

                <span id="span-euw"   class="item1"  data-name="euw"  onclick="btnClick(this)">EUW</span>
                <span id="span-na" class="item2" data-name="na" onclick="btnClick(this)">NA</span>
                <span id="span-eune" class="item5" data-name="eune" onclick="btnClick(this)">EUNE</span>
                <span id="span-oce" class="item6" data-name="oce" onclick="btnClick(this)">OCE</span>
                <span id="span-tr" class="item3" data-name="tr" onclick="btnClick(this)">TR</span>
              <span id="span-br" class="item4" data-name="br" onclick="btnClick(this)">BR</span>



                </span>


              </div>
            </nav>




            <div id="Accounts" class="activities-grid">

                @foreach ($products as $product)


                    <div id="{{$product->short_description}}" class="activities-grid-item bla" style=" background-image: url({{asset('/imagg/accounts')}}/{{$product->image}}"  >
                        <a  href="{{route('product.details',$product->slug)}}"></a>
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
                        <span class="price">{{$product->regular_price}}</span>
                        ?>
                    </div>
                    </div>

                @endforeach



        </div>
    </div>
  </section>
  <section class="pagination">
      <ul class="wrap-pagination-info">
      {{$products->links()}}

    </div>
  </section>

</main>
