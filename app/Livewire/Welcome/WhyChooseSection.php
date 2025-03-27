<?php

namespace App\Livewire\Welcome;

use App\Models\WhyChooseUs;
use Livewire\Component;

class WhyChooseSection extends Component
{

    public $data;

    public function mount()
    {
        $this->data = WhyChooseUs::all();
    }
    public function render()
    {
        return view('livewire.welcome.why-choose-section');
    }
}
