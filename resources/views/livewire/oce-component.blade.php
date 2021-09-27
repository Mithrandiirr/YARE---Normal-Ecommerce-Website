<div id="Accounts" class="activities-grid">
    @foreach ($products as $product)
    @if($product->category_id == '4')
            <!-- grid item #1 -->
            <a href="{{route('product.details',$product->slug)}}">
            <div id="oce" class="activities-grid-item bla" style=" background-image: url({{asset('imagg/accounts')}}/{{$product->image}}" >
              <h1 class="activities-h1">
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

                        <p class="card-text">{{$product->name}}</p>
                        <span class="price">{{$product->regular_price}}</span>
                        ?>
                    </div>
            </div>
        </a>
        @endif
            @endforeach
    </div>
