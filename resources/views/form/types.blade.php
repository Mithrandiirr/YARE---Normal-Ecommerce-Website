@extends('layouts.master')
@section('menu')
@extends('sidebar.skins_staff')
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

                                              </div>

                                      </div>
                              </div>
                                   <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <a href="{{route('admin.addtype')}}"><i class="far fa-plus-square fa-3x text-info"></i></a>

    <table class="table">
       <thead class="thead-dark">
           <tr>
               <th class="table">Id</th>
               <th class="table">Name</th>
               <th class="table">Slug</th>
           </tr>
       </thead>
    </tbody>
      @foreach ($types as $type)
              <tr>
                     <td>{{$type->id}}</td>
                     <td>{{$type->name}}</td>
                     <td>{{$type->slug}}</td>
                     <td>
                        <a href="{{route('deleteType',$type->id)}}" onclick="confirm('Are you sure ,You want to delete this Category ?') || event.stopImmediatePropagation()">
                            <i class="fa fa-times  text-danger"></i>
                       </a>

                     </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</form>
