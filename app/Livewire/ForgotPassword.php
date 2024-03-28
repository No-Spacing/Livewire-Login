<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;


class ForgotPassword extends Component
{

    public $email;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // add your next logic here...
    }

    #[Title('Forgot Password')]
    public function render()
    {
        return view('livewire.forgot-password');
    }
}
