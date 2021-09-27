<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditGalleryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $newimage;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);
    }
    public function addGallery()
    {
        $this->validate([
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);

    $gallery = new Gallery();
    $gallery->slug = $this->slug;
    if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('test',$imageName);
            $gallery->image = $imageName;
        }
    $gallery->save();
    session()->flash('message', 'Gallery has been added successfully !');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-gallery-component')->layout('layouts.admin-category');
    }
}
