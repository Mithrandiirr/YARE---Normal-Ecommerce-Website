<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Pay;
use App\Models\Skin;
use App\Models\Gallery;
use App\Models\Champion;
class DetailsComponent extends Component
{
    public $name;
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $skins = Skin::all();
        $champions = Champion::all();
        $galleries = Gallery::all();
        return view('livewire.details-component',['product'=>$product, 'skins'=>$skins,'champions'=>$champions,'galleries'=>$galleries])->layout('layouts.details');
    }
}
