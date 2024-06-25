<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Messagebox extends Component
{   
    public function render()
    {

        return view('livewire.messagebox',['users'=>User::all()]);
    }
}
