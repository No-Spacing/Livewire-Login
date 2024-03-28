<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;

class Login extends Component
{ 

    public $email = '';
    
    public $password = '';

    
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // add your next logic here...
    }

    #[Title('Login')] 
    public function render()
    {
        return view('livewire.login');
    }
}
