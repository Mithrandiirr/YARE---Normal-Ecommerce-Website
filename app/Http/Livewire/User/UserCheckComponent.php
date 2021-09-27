<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserCheckComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-check-component')->layout('layouts.base');
    }
}
