<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Champion;
use App\Models\Product;
class AdminChampionComponent extends Component
{
    public $name;
    public $image;
    public function deleteChampion($id)
    {
$champion = champion::find($id);
$champion->delete();
session()->flash('message','Champion has been deleted successfully!');
    }
    public function render()
    {
        $champions = Champion::all();
        $products = Product::all();
        return view('livewire.admin.admin-champion-component',  ['champions'=>$champions,'products'=>$products])->layout('layouts.admin-category');
    }
}
