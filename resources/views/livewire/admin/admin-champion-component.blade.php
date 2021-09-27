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
                                <a href="{{route('admin.editchampion')}}"><i class="far fa-plus-square fa-3x text-info"></i></a>

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
  @foreach ($champions as $champion)
          <tr>
                 <td>{{$champion->id}}</td>
                 <td><img src="{{asset('imagg/test')}}/{{$champion->image}}" width="60"></td>
                 <td>{{$champion->name}}</td>
                 <td>{{$champion->slug}}</td>
                 <td>
                    <a href="#" onclick="confirm('Are you sure ,You want to delete this Champion ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteChampion({{$champion->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>

                 </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
