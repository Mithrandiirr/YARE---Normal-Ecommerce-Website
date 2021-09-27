<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Skin;
use App\Models\Product;
class AdminSkinComponent extends Component
{
    public $name;
    public $image;
    public function deleteSkin($id)
    {
$skin = Skin::find($id);
$skin->delete();
session()->flash('message','Skin has been deleted successfully!');
    }
    public function render()
    {
        $skins = Skin::all();
        $products = Product::all();
        return view('livewire.admin.admin-skin-component',  ['skins'=>$skins,'products'=>$products])->layout('layouts.admin-category');
    }
}
