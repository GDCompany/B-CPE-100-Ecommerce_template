<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layout.app')]
class RegisterPage extends Component
{
    public function render()
    {
        return view('livewire.register-page');
    }
}
