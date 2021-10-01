@extends('layouts.master')
@section('menu')
@extends('sidebar.account_staff')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Displaying All Accounts</h3>
                <p class="text-subtitle text-muted">Accounts Settings</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Input</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- message --}}
    {!! Toastr::message() !!}

    <div>
        <div class="admin"  style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-default">
                              <div class="panel-heading">
                                      <div class="row">
                                              <div class="col-md-6">
                                                  <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New Account</a>

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
               <th class="table ">Type</th>
               <th class="table ">Date</th>
               <th class="table ">Action</th>
           </tr>
       </thead>
    </tbody>
      @foreach ($products as $product)
              <tr>
                  <?php  if($product->account_type === "1")
                  $variable = "Unranked";
                  elseif($product->account_type === "2")
                  $variable = "Botted";
else
$variable = "Regular";
                  ?>
                     <td>{{$product->id}}</td>
                     <td><img src="{{asset('imagg/accounts')}}/@if($product->account_type === "1")unranked.png @elseif($product->account_type === "2")botted.png @elseif($product->ranked ==="1" && $product->account_type === "3" )bronze.png @elseif($product->ranked === "2" && $product->account_type === "3")silver.png @elseif($product->ranked==="3" && $product->account_type === "3")gold.png @elseif($product->ranked ==="4" && $product->account_type === "3")plat.png @elseif($product->ranked ==="5" && $product->account_type === "3")diam.png @elseif($product->ranked=== "6" && $product->account_type ==="3")master.png @elseif($product->ranked ==="7")challenger.png  @endif" width="60"></td>
                     <td>{{$product->name}}</td>
                     <td>{{$product->regular_price}}$</td>
                    <td>{{$product->category->name}}</td>
                    <td><b>{{$variable}}</b></td>
                     <td>{{$product->created_at}}</td>
                     <td>
                     <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fa fa-edit text-info"></i></a>

                     <a href="{{route('deleteAccount',$product->id)}}" onclick="confirm('Are you sure ,You want to delete this Category ?') || event.stopImmediatePropagation()">
                        <i class="fa fa-times  text-danger"></i>
                   </a>

                     </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>

@endsection
