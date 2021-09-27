<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\Product;
use DB;
class UserDashboardComponent extends Component
{
    public function render()
    {
        $products = DB::table('products')->count();
        return view('livewire.user.user-dashboard-component',['products'=>$products])->layout('layouts.user');
    }
}
