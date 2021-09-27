<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminEditProductComponent extends Component
{
    use WithFileUploads;
     public $name;
    public $slug;
    public $short_description;

    public $regular_price;

    public $icons;
    public $type;
    public $previous_ranked;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;
    public $date_ofcreation;
    public $skins;
    public $ward;
    public $level;
    public $ranked;
    public $honor;
    public $be;
    public $account_type;
    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;

        $this->regular_price =  $product->regular_price;

        $this->skins =  $product->skins;
        $this->icons =  $product->icons;
        $this->type =  $product->type;
        $this->previous_ranked =  $product->previous_ranked;
        $this->image =  $product->image;
        $this->category_id =  $product->category_id;
        $this->product_id =  $product->id;
        $this->date_ofcreation =  $product->date_ofcreation;
        $this->ward =  $product->ward;
        $this->level =  $product->level;
        $this->ranked =  $product->ranked;
        $this->honor =  $product->honor;
        $this->be =  $product->be;
        $this->account_type = $product->account_type;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
        'name'=> 'required',
        'slug'=> 'required|unique:products',
        'short_description' => 'required',

        'regular_price' => 'required|numeric',

        'icons' => 'required|numeric',
        'type' => 'required',
        'previous_ranked' => 'required',
        'newimage' => 'required|mimes:jpeg,png',
        'category_id' => 'required',
        'date_ofcreation'=> 'required',
        'skins' => 'required|numeric',
        'ward' => 'required|numeric',
        'level' => 'required|numeric',
        'ranked' => 'required',
        'honor' => 'required',
        'be' =>'required|numeric',
        'account_type' => 'required'
        ]);
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function updateAccount()
    {
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'short_description' => 'required',
            'regular_price' => 'required|',
            'icons' => 'required|numeric',
            'type' => 'required',
            'newimage' => 'nullable|mimes:jpeg,png',
            'category_id' => 'required',
            'date_ofcreation'=> 'required',
            'skins' => 'required|numeric',
            'ward' => 'required|numeric',
            'level' => 'required|numeric',
            'ranked' => 'required',
            'honor' => 'required',
            'be' =>'required|numeric',
            'account_type' => 'required'
            ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->regular_price = $this->regular_price;
        $product->skins =  $this->skins;
        $product->icons = $this->icons;
        $product->type =  $this->type;
        $product->previous_ranked =  $product->previous_ranked;
        $product->date_ofcreation =  $this->date_ofcreation;
        $product->ward =  $this->ward;
        $product->level =  $this->level;
        $product->ranked =  $this->ranked;
        $product->honor =  $this->honor;
        $product->be =  $this->be;
if($this->newimage)
{
            $imageName = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('accounts',$imageName);
            $product->image = $imageName;
}

        $product->category_id = $this->category_id;
        $product->account_type = $this->account_type;
        $product->save();
        session()->flash('message', 'Account has been updated successfully !');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.admin-category');
    }
}
