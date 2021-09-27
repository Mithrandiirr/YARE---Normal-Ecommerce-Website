<div>
    <div class="admin" >
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">
<div class="col-md-6">
Edit Product</div>
<div class="col-md-6">
  <a href="{{route('admin.gallery')}}" class="btn btn-success pull-right">All Galleries</a>
</div>
                              </div>
                          </div>
                          <div class="panel-body">
                             @if(Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
<form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addGallery">

    <div class="form-group">
        <label class="col-md-4 control-label" >Slug</label>
        <div class="col-md-4">
            <input type="text" placeholder="Gallery Slug" class="form-control input-md" wire:model="slug"/>
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Gallery Image</label>
        <div class="col-md-4">
            <input type="file"  class="input-file" wire:model="newimage" />
            @if($newimage)
            <img src="{{$newimage->temporaryUrl()}}" width="120" />
            @else
            <img src="{{asset('imagg/test')}}/{{$image}}" width="120" />
            @endif
            @error('newimage') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit"  class="btn btn-primary" >Add</button>
        </div>
    </div>
</form>
                          </div>
</div>
