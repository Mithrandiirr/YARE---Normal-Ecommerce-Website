<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuccessComponent extends Component
{




    public function render()
    {

        return view('success.success')->layout("layouts.success");
    }
}
