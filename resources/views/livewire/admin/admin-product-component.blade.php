<div>
    <div class="admin"  style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                                  <div class="row">
                                          <div class="col-md-6">
                                              <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New Account</a>
                                              <a href="{{route('admin.skin')}}" class="btn btn-success pull-right">Add Skins</a>
                                              <a href="{{route('admin.champion')}}" class="btn btn-success pull-right">Add Champions</a>
                                              <a href="{{route('admin.gallery')}}" class="btn btn-success pull-right">Add Gallery</a>
                                          </div>

                                  </div>
                          </div>
                               <div class="panel-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif

<table class="table">
   <thead class="thead-dark">
       <tr>
           <th class="table">Id</th>
           <th class="table">image</th>
           <th class="table">Name</th>
           <th class="table">Price</th>
           <th class="table ">Category</th>
           <th class="table ">Date</th>
           <th class="table ">Action</th>
       </tr>
   </thead>
</tbody>
  @foreach ($products as $product)
          <tr>
                 <td>{{$product->id}}</td>
                 <td><img src="{{asset('imagg/accounts')}}/{{$product->image}}" width="60"></td>
                 <td>{{$product->name}}</td>
                 <td>{{$product->regular_price}}</td>
                <td>{{$product->category_name}}</td>
                 <td>{{$product->created_at}}</td>
                 <td>
                 <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>

                 <a href="#" onclick="confirm('Are you sure ,You want to delete this account ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>

                 </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
