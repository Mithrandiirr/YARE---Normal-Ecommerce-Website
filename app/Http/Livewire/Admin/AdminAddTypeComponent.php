<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\AccountType;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AdminAddTypeComponent extends Component
{
    public $name;
    public $slug;
    public  function generatesslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }
    public function storeType()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        $account_type = new AccountType();
        $account_type->name = $this->name;
        $account_type->slug = $this->slug;
        $account_type->save();
        session()->flash('message','Type has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-type-component')->layout('layouts.admin-category');
    }
}
