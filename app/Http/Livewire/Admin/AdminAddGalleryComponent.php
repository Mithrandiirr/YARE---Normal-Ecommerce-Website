<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class AdminAddGalleryComponent extends Component
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
    public function addGallery()
    {
        $this->validate([
           'name'=> 'required',
           'image' =>'required|mime:jpeg,png',
        ]);

         $gallery = new Gallery();
         $gallery->name = $this->name;
         $imageName = Carbon::now()->timestamp.'.'. $this->image->extension();
         $this->image->storeAs('test',$imageName);
         $gallery->image = $imageName;
         $gallery->save();
         session()->flash('message', 'Gallery has been added successfully !');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-gallery-component')->layout('layouts.admin-category');
    }
}
