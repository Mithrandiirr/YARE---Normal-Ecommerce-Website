
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
<form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
    <div class="form-group">
        <label class="col-md-4 control-label" >Account Name </label>
        <div class="col-md-4">
            <input type="text" placeholder="Account Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
            @error('name') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Account Slug</label>
        <div class="col-md-4">
            <input type="text" placeholder="Account Slug" class="form-control input-md" wire:model="slug"/>
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Server</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="euw,na,eune,oce,br,tr" wire:model="short_description"></textarea>
            @error('short_description') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Regular Price</label>
        <div class="col-md-4">
            <input type="text" placeholder="Regular price" class="form-control input-md" wire:model="regular_price"/>
            @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>


    {{-- <div class="form-group">
        <label class="col-md-4 control-label" >Product Image</label>
        <div class="col-md-4">
            <input type="file"  class="input-file" wire:model="image" />
            @if($image)
            <img src="{{$image->temporaryUrl()}}" width="120" />
            @elseif($product->short_description==='unranked')
            <img src="{{asset('imagg/test')}}/{{$image}}" width="120" />
            @endif
            @error('image') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div> --}}
    <div class="form-group">
        <label class="col-md-4 control-label" >Account Type (Unranked/Botted/Regular)</label>
        <div class="col-md-4">
            <select class="form-control" wire:model="account_type">
                <option value="">Select Category</option>

                <option value="1">Unranked</option>
                <option value="2">Botted</option>
                <option value="3">Regular</option>
            </select>
            @error('slug') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Category</label>
        <div class="col-md-4">
            <select class="form-control" wire:model="category_id">
                <option value="">Select Category</option>

                <option value="1">EUW</option>
                <option value="2">NA</option>
                <option value="3">EUNE</option>
                <option value="4">OCE</option>
                <option value="5">BR</option>
                <option value="6">TR</option>
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
            <select class="form-control" wire:model="type">
            <option value="">Select Category</option>
            <option value="1">Handmade</option>
            <option value="2">Botted</option>
            </select>
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
            <select class="form-control" wire:model="ranked">
                <option value="">Select Category</option>
                <option value="1">Bronze</option>
                <option value="2">Silver</option>
                <option value="3">Gold</option>
                <option value="4">Platinium</option>
                <option value="5">Diamond</option>
                <option value="6">Master</option>
                <option value="7">Challenger</option>
            </select>
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
        <label class="col-md-4 control-label" >RP</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="RP" wire:model="rp"></textarea>
            @error('rp') <p class="text-danger">{{$message}}</p>@enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >URF Ranked</label>
        <div class="col-md-4">
            <textarea class="form-control" placeholder="URF Ranked" wire:model="urf"></textarea>
            @error('urf') <p class="text-danger">{{$message}}</p>@enderror
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
            <button type="submit"  class="btn btn-primary" >Submit</button>
        </div>
    </div>
                          </div>
</div>
