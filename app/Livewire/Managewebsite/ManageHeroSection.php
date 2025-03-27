<?php

namespace App\Livewire\Managewebsite;

use App\Models\Hero;
use Livewire\Component;

class ManageHeroSection extends Component
{

    public $id;
    public $header;
    public $sub_header;

    public function mount()
    {
        $data = Hero::first();
        if ($data) {
            $this->id = $data->id;
            $this->header = $data->header;
            $this->sub_header = $data->sub_header;
        }
    }

    public function save()
    {
        $this->validate([
            'header' => 'required|string',
            'sub_header' => 'required|string',
        ]);

        Hero::updateOrCreate(
            ['id' => $this->id],
            [
                'header' => $this->header,
                'sub_header' => $this->sub_header,
            ]
        );

        session()->flash('message', 'Hero section updated!');
    }

    public function render()
    {
        return view('livewire.managewebsite.manage-hero-section');
    }
}
