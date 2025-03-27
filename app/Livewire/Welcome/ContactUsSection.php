<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class ContactUsSection extends Component
{
    public $name, $email, $message, $date;
    public $success = false;

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'date' => 'required',
        ]);

        // Handle form logic (e.g., send email or store in DB)
        // Mail::to(...); or Contact::create([...]);

        $this->reset(['name', 'email', 'message', 'date']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.welcome.contact-us-section');
    }
}
