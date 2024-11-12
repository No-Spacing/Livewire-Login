<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home')->with(['user' => User::where('id',session('UserCheck'))->first()]);
    }
}
