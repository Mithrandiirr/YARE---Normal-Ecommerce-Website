<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use App\Models\Product;
use App\Models\AccountType;
use Livewire\WithPagination;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class TypesController extends Controller
{
    use WithPagination;
    public function deleteType($id)
{
    $account_type = AccountType::find($id);
    $account_type->delete();
    session()->flash('message', 'Type has been deleted successfully !');

    return redirect()->back();
}
    public function index()
    {
        $types = AccountType::all();
        $products = Product::all();

        return view('form.types', ['types' => $types,'products'=>$products]);
    }
}
