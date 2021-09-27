<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use App\Models\Champion;
use App\Models\Product;
use Livewire\WithPagination;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class ChampionsController extends Controller
{
    use WithPagination;
    public function deleteChampion($id)
{
    $champion = champion::find($id);
    $champion->delete();
    session()->flash('message','Champion has been deleted successfully!');

    return redirect()->back();
}
    public function index()
    {
        $champions = Champion::all();
        $products = Product::all();

        return view('form.champions', ['champions' => $champions,'products'=>$products]);
    }
}
