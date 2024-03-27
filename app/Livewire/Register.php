<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attribute\Validate;

class Register extends Component
{

    public $name, $email, $password;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // add your next logic here...
    }

    public function render()
    {
        return view('livewire.register');
    }
}
