<div>
    <div class="admin"  style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                  <div class="panel panel-default">
                          <div class="panel-heading">
                                  <div class="row">
                                          <div class="col-md-6">

                                          </div>

                                  </div>
                          </div>
                               <div class="panel-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <a href="{{route('admin.editskin')}}"><i class="far fa-plus-square fa-3x text-info"></i></a>

<table class="table">
   <thead class="thead-dark">
       <tr>
           <th class="table">Id</th>
           <th class="table">image</th>
           <th class="table">Name</th>
           <th class="table">Slug</th>
       </tr>
   </thead>
</tbody>
  @foreach ($skins as $skin)
          <tr>
                 <td>{{$skin->id}}</td>
                 <td><img src="{{asset('imagg/test')}}/{{$skin->image}}" width="60"></td>
                 <td>{{$skin->name}}</td>
                 <td>{{$skin->slug}}</td>
                 <td>
                    <a href="#" onclick="confirm('Are you sure ,You want to delete this Skin ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSkin({{$skin->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>

                 </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
