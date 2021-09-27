<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use App\Models\Skin;
use App\Models\Product;
use Livewire\WithPagination;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class SkinsController extends Controller
{
    use WithPagination;
    public function deleteSkin($id)
{
    $skin = Skin::find($id);
    $skin->delete();
    session()->flash('message', 'Skin has been deleted successfully !');

    return redirect()->back();
}
    public function index()
    {
        $skins = Skin::all();
        $products = Product::all();

        return view('form.skins', ['skins' => $skins,'products'=>$products]);
    }
}
