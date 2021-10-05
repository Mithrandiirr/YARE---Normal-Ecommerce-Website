<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\AccountType;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $icons;
    public $type;
    public $previous_ranked;
    public $image;
    public $newimage;
    public $category_id;
    public $date_ofcreation;
    public $skins;
    public $ward;
    public $level;
    public $ranked;
    public $honor;
    public $be;
    public $rp;
    public $urf;
    public $account_type;
    public $price_id;
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }
    public function updated($fields){
    $this->validateOnly($fields,[
        'name'=> 'required',
        'slug'=> 'required|unique:products',
        'short_description' => 'required',
        'regular_price' => 'required|numeric',
        'icons' => 'required|numeric',
        'type' => 'required',
        'previous_ranked' => 'required',
        // 'image' => 'required|mimes:jpeg,png',
        'category_id' => 'required',
        'date_ofcreation'=> 'required',
        'skins' => 'required|numeric',
        'ward' => 'required|numeric',
        'level' => 'required|numeric',
        'ranked' => 'required',
        'honor' => 'required',
        'be' =>'required|numeric',
        'rp' =>'required|numeric',
        'urf' =>'required',
        'account_type'=> 'required',
        'price_id' =>'required',
    ]);
    }
    public function addProduct()
    {
        $this->validate([
        'name'=> 'required',
        'slug'=> 'required|unique:products',
        'short_description' => 'required',
        'regular_price' => 'required|numeric',
        'icons' => 'required|numeric',
        'type' => 'required',
        'previous_ranked' => 'required',
        // 'image' => 'required|mimes:jpeg,png',
        'category_id' => 'required',
        'date_ofcreation'=> 'required',
        'skins' => 'required|numeric',
        'ward' => 'required|numeric',
        'level' => 'required|numeric',
        'ranked' => 'required',
        'honor' => 'required',
        'be' =>'required|numeric',
        'rp' =>'required|numeric',
        'urf' =>'required',
        'account_type'=> 'required',
        'price_id' =>'required',

        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;

        $product->regular_price = $this->regular_price;

        $product->skins =  $this->skins;
        $product->icons = $this->icons;
        $product->type =  $this->type;
        $product->previous_ranked =  $this->previous_ranked;
        $product->date_ofcreation =  $this->date_ofcreation;
        $product->ward =  $this->ward;
        $product->level =  $this->level;
        $product->ranked =  $this->ranked;
        $product->honor =  $this->honor;
        $product->be =  $this->be;
        $product->rp =  $this->rp;
        $product->urf =  $this->urf;
        $product->price_id = $this->price_id;

            // $imageName = Carbon::now()->timestamp.'.'. $this->image->extension();
            // $this->image->storeAs('accounts',$imageName);
            // $product->image = $imageName;

        $product->category_id = $this->category_id;
        $product->account_type =$this->account_type;
        $product->save();
        session()->flash('message', 'Account has been added successfully !');



    }
    public function render()
    {
$product = new Product();
$types = AccountType::all();
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['product'=>$product,'categories'=>$categories,'types'=>$types])->layout('layouts.admin-category');
    }
}
