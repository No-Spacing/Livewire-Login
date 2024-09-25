<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;

class Register extends Component
{

    public $name, $email, $password, $password_confirmation;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);
        // add your next logic here...
    }

    #[Title('Register')]
    public function render()
    {
        return view('livewire.register');
    }
}
