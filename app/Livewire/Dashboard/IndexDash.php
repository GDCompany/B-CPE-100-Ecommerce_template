<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layout.backend.layout.app')]
class IndexDash extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index-dash');
    }
}
