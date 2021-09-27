<div>
    <div class="admin" >
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
<div class="col-md-6">
Add new Product</div>
<div class="col-md-6">
  <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
</div>

                              </div>
                          </div>
                          <div class="panel-body">
                             @if(Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
<form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addSkin">
    <div class="form-group">
        <label class="col-md-4 control-label" >Product Name </label>
        <div class="col-md-4">
            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Product Slug</label>
        <div class="col-md-4">
            <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>

        </div>
    </div>


    <div class="form-group">
        <label class="col-md-4 control-label" >Account Image</label>
        <div class="col-md-4">
            <input type="file"  class="input-file" wire:model="image" />
            @if($image)
            <img src="{{$image->temporaryUrl()}}" width="120" />
            @endif
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit"  class="btn btn-primary" >Submit</button>
        </div>
    </div>
                          </div>
</div>
