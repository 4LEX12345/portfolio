<?php

namespace App\Livewire\Managewebsite;

use App\Models\TechStack;
use Livewire\Component;

class ManageTechnologyStack extends Component
{

    public $technology;
    public $technologies;

    public function mount()
    {
        $this->technologies = TechStack::all();
    }

    public function save()
    {
        $this->validate([
            'technology' => 'required|string',
        ]);

        TechStack::Create([
            'technology' => $this->technology
        ]);

        session()->flash('message', 'New Technology added');
        $this->reset(['technology']);
    }

    public function delete($id)
    {
        TechStack::findOrFail($id)->delete();
        session()->flash('message', 'Technology deleted');
    }

    public function render()
    {
        $this->technologies = TechStack::all();

        return view('livewire.managewebsite.manage-technology-stack', [
            'technologies' => $this->technologies
        ]);
    }
}
