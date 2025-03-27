<?php

namespace App\Livewire\Welcome;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesSection extends Component
{

    public $services;


    public function render()
    {
        $data = Service::all();
        return view('livewire.welcome.services-section', ['data' => $data]);
    }
}
