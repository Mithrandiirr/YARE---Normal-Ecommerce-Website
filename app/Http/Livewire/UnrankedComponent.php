<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\AccountType;
class UnrankedComponent extends Component
{
    public $sorting;
    public $pagesize;
public function mount() {
    $this->sorting = "default";
    $this->pagesize = 12;
}
    use WithPagination;

    public function render()
    {
        if($this->sorting=='date')
        {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=='price'){
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting== 'price_desc'){
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }else {
        $products = Product::paginate($this->pagesize);
        }
        $test = Product::where('account_type', 'unranked')->get();

            $categories = Category::all();
            $types = AccountType::all();
        return view('livewire.unranked-component', ['test'=>$test,'products' => $products, 'categories'=> $categories,'types'=>$types,'product'])->layout("layouts.all");
    }
}
