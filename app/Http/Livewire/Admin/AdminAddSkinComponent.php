<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Skin;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminAddSkinComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
           'image' =>'required|mime:jpeg,png',
        ]);
    }
    public function addSkin()
    {
        $this->validate([
           'name'=> 'required',
           'image' =>'required|mime:jpeg,png',
        ]);

         $skin = new Skin();
         $skin->name = $this->name;
         $imageName = Carbon::now()->timestamp.'.'. $this->image->extension();
         $this->image->storeAs('test',$imageName);
         $skin->image = $imageName;
         $skin->save();
         session()->flash('message', 'Product has been added successfully !');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-skin-component')->layout('layouts.admin-category');
    }
}
