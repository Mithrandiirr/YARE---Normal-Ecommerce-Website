<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class Items1Component extends Component
{
    public $name;
    public $slug;


    public function render()
    {

        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.pay1-component',['product'=>$product])->layout('layouts.pay');
    }
   }
