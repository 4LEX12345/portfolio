<?php

namespace App\Livewire\Managewebsite;

use Exception;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageServices extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $uri_type;
    public $uri;
    public $other_uri;
    public $services;
    public $id;
    public $is_edit = false;

    public function mount()
    {
        $this->services =  Service::all();
    }

    public function save()
    {


        $rules = [
            'name' => 'required',
            'description' => 'required',
            'uri_type' => 'required',
        ];

        switch ($this->uri_type) {
            case 'image':
                $rules['uri'] = 'required|file|image|max:2048';
                break;
            case 'lottie':
                $rules['other_uri'] = 'required|url';
                break;
        }

        $this->validate($rules);


        $path = null;
        if ($this->uri_type == 'image') {
            if ($this->uri) {
                $path = $this->uri->store('services', 'public');
            }
        };

        Service::updateOrCreate(
            [
                'id' => $this->id,
            ],
            [
                'name' => $this->name,
                'description' => $this->description,
                'uri_type' => $this->uri_type,
                'uri' => $this->uri_type == 'image' ? $path : $this->other_uri,
            ]
        );

        session()->flash('message', $this->is_edit ? 'Service updated successfully!' : 'Service created successfully!');
        $this->reset(['name', 'description', 'uri_type', 'is_edit', 'other_uri', 'id', 'uri']);
        $this->mount();
    }

    public function edit($id)
    {
        $data = Service::find($id);

        $this->id = $data->id;
        $this->name = $data->name;
        $this->description = $data->description;
        $this->uri_type = $data->uri_type;

        switch ($data->uri_type) {
            case 'image':
                $this->uri = $data->uri;
                break;
            case 'lottie':
                $this->other_uri = $data->uri;
        }

        $this->is_edit = true;
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        $this->mount();
        session()->flash('message', 'Technology deleted');
    }

    public function render()
    {
        return view('livewire.managewebsite.manage-services');
    }

    public function messages()
    {
        return [
            'other_uri.required' => 'The link is required when Lottie is selected.',
            'other_uri.url' => 'The link must be a valid URL.',
        ];
    }
}
