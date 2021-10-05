<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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
$price_id = DB::table('products')->where('slug', $this->slug)->value('price_id');
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.pay-component',['price_id'=>$price_id,'product'=>$product])->layout('layouts.pay');
    }
   }
