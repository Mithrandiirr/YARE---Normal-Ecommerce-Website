<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use App\Models\Category;
use Livewire\WithPagination;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class CategoriesController extends Controller
{
    use WithPagination;
    public function deleteCategory($id)
{
    $category = Category::find($id);
    $category->delete();
    session()->flash('message', 'Category has been deleted successfully !');

    return redirect()->back();
}
    public function index()
    {
        $categories = Category::paginate(10);

        return view('form.categories', ['categories' => $categories]);
    }
}
