<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Skin;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditSkinComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public function mount()
    {
        $skin = new Skin();

        $this->name = $skin->name;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);
    }
    public function updateSkin()
    {
        $this->validate([
           'name'=> 'required',
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);

    $skin = new Skin();
    $skin->name = $this->name;
    $skin->slug = $this->slug;
    if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('test',$imageName);
            $skin->image = $imageName;
        }
    $skin->save();
    session()->flash('message', 'Skin has been Added successfully !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-skin-component')->layout('layouts.admin-category');
    }
}
