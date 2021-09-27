<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Gallery;
use App\Models\Product;
class AdminGalleryComponent extends Component
{
    public $image;
    public function deleteGallery($id)
    {
$gallery = Gallery::find($id);
$gallery->delete();
session()->flash('message','Gallery has been deleted successfully!');
    }
    public function render()
    {
        $galleries = Gallery::all();
        $products = Product::all();
        return view('livewire.admin.admin-gallery-component',  ['galleries'=>$galleries,'products'=>$products])->layout('layouts.admin-category');
    }
}
