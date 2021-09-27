<div>
    <div class="admin" >
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">

<div class="col-md-6">
  <a href="{{route('admin.types')}}" class="btn btn-success pull-right">All Types</a>
</div>
                              </div>
                          </div>
                          <div class="panel-body">
                              @if(Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
<form class="form-horizontal" wire:submit.prevent="storeType">
    <div class="form-group">
        <label class="col-md-4 control-label">Type Name </label>
        <div class="col-md-4">
            <input type="text" placeholder="Type Name" class="form-control input-md" wire:model="name" wire:keyup="generatesslug"/>
            @error('name') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Type Slug </label>
        <div class="col-md-4">
            <input type="text" placeholder="Type Slug" class="form-control input-md" wire:model="slug" />
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="text"  class="btn btn-primary" >Submit</button>
        </div>
    </div>
                          </div>
</div>
