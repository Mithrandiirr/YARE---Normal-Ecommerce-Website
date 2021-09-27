<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Models\Product;
class PayComponent extends Component
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
        return view('livewire.pay-component',['product'=>$product])->layout('layouts.pay');
    }
   }
