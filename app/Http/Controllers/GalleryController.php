<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Product;
use Livewire\WithPagination;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class GalleryController extends Controller
{
    use WithPagination;
    public function deleteGallery($id)
    {
$gallery = Gallery::find($id);
$gallery->delete();
session()->flash('message','Gallery has been deleted successfully!');
    return redirect()->back();
}
    public function index()
    {
        $galleries = Gallery::all();
        $products = Product::all();

        return view('form.gallery', ['galleries' => $galleries,'products'=>$products]);
    }
}
