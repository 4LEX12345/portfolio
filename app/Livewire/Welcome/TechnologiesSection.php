<?php

namespace App\Livewire\Welcome;

use App\Models\TechStack;
use Livewire\Component;

class TechnologiesSection extends Component
{

    public $technologies;

    public function mount()
    {
        $this->technologies = TechStack::all();
    }
    public function render()
    {
        return view('livewire.welcome.technologies-section');
    }
}
