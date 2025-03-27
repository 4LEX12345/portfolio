<?php

namespace App\Livewire\Welcome;

use App\Models\Hero;
use Livewire\Component;

class HeroSection extends Component
{

    public $header;
    public $sub_header;

    public function mount()
    {
        $data = Hero::first();

        if ($data) {
            $this->header = $data->header;
            $this->sub_header = $data->sub_header;
        } else {
            $this->header = 'NAME OF COMPANY';
            $this->sub_header = 'TAGLINE/SUBHEADER';
        }
    }

    public function render()
    {
        return view('livewire.welcome.hero-section');
    }
}
