@extends('layouts.master')
@section('menu')
@extends('sidebar.category_staff')
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
                <h3>Add new Category</h3>
                <p class="text-subtitle text-muted">Category Settings</p>
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
        <style>
            nav svg {
                height: 20px;
            }
            nav .hidden{
                display:block !important;
            }
            </style>
       <div class="admin" >
             <div class="row">
                 <div class="col-md-12">
                       <div class="panel panel-default">
                               <div class="panel-heading">
                                       <div class="row">

                                               <div class="col-md-6">
                                                   <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add new Category</a>
                                               </div>
                                       </div>
                               </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}
                                        </div>
                                        @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="table">Id</th>
                <th class="table">Category Name</th>
                <th class="table">Slug</th>
                <th class="table">Action</th>
            </tr>
        </thead>
    </tbody>
               @foreach ($categories as $category)
               <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->slug}}</td>
                      <td>
                      <a href="{{route('admin.editcategory', ['category_slug'=> $category->slug])}}"><i class="fa fa-edit "></i></a>
                      <a href="{{route('deleteCategory',$category->id)}}" onclick="confirm('Are you sure ,You want to delete this Category ?') || event.stopImmediatePropagation()">
                        <i class="fa fa-times  text-danger"></i>
                   </a>
                      </td>
               </tr>
               @endforeach
            </tbody>
        </table>
        {{$categories->links(

        )}}
                 </div>
            </div>
       </div>
    </div>
    </div>
    </div>
</form>
                    @endsection
