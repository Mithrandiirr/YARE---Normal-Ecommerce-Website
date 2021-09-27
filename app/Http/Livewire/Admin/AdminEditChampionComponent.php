<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Champion;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditChampionComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $newimage;
    public function mount()
    {
        $champion = new champion();

        $this->name = $champion->name;


    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=> 'required',
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);
    }
    public function updateChampion()
    {
        $this->validate([
           'name'=> 'required',
           'newimage' =>'required|mimes:jpeg,png',
           'slug' => 'required',
        ]);

    $champion = new Champion();
    $champion->name = $this->name;
    $champion->slug = $this->slug;
    if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('test',$imageName);
            $champion->image = $imageName;
        }
    $champion->save();
    session()->flash('message', 'Champion has been added successfully !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-champion-component')->layout('layouts.admin-category');
    }
}
