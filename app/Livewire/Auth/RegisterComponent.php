<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class RegisterComponent extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.auth.register-component');
    }
}
