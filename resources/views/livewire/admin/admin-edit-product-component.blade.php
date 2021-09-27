<div>
    <div class="admin" >
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                              <div class="row">

<div class="col-md-6">
  <a href="{{route('admin.accounts')}}" class="btn btn-success pull-right">All Accounts</a>
</div>
                              </div>
                          </div>
                          <div class="panel-body">
                             @if(Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
<form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateAccount">
    <div class="form-group">
        <label class="col-md-4 control-label" >Product Name </label>
        <div class="col-md-4">
            <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
            @error('name') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Product Slug</label>
        <div class="col-md-4">
            <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Short Description</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Short Description" wire:model="short_description"></textarea>
            @error('short_description') <p class="text-danger">{{$message}}</p>@enderror

        </div>
    </div>

    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Regular Price</label>
        <div class="col-md-4">
            <input type="text" placeholder="Regular price" class="form-control input-md" wire:model="regular_price"/>
            @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror

        </div>
    </div>

    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Product Image</label>
        <div class="col-md-4">
            <input type="file"  class="input-file" wire:model="newimage" />
            @if($newimage)
            <img src="{{$newimage->temporaryUrl()}}" width="120" />
            @else
            <img src="{{asset('imagg')}}/{{$image}}" width="120" />
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Account Type (Unranked/Botted/Regular)</label>
        <div class="col-md-4">
            <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="account_type"/>
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Category</label>
        <div class="col-md-4">
            <select class="form-control" wire:model="category_id">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Skins</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Skins" wire:model="skins"></textarea>
            @error('skins') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Icons</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Icons" wire:model="icons"></textarea>
            @error('icons') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Wards</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Wards" wire:model="ward"></textarea>
            @error('ward') <p class="text-danger">{{$message}}</p>@enderror
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Type</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Type" wire:model="type"></textarea>
            @error('type') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Previous Ranked</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Previous Ranked" wire:model="previous_ranked"></textarea>
            @error('previous_ranked') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Ranked</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Ranked" wire:model="ranked"></textarea>
            @error('ranked') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Date of Creation</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Date of Creation" wire:model="date_ofcreation"></textarea>
            @error('date_ofcreation') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Level</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Level" wire:model="level"></textarea>
            @error('level') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Blue Essence</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Blue Essence" wire:model="be"></textarea>
            @error('be') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Honor Level</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="Honor Level" wire:model="honor"></textarea>
            @error('honor') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit"  class="btn btn-primary" >Update</button>
        </div>
    </div>
                          </div>
</div>
