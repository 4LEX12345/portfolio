<?php

namespace App\Livewire\Managewebsite;

use Livewire\Component;
use App\Models\WhyChooseUs;
use App\Models\WhyChooseUsDetail;

class ManageWhyChooseUs extends Component
{

    public $id;
    public $name;
    public $icon;
    public $descriptions = [''];
    public $why_choose_list;
    public $is_edit = false;

    public function addDescription()
    {
        $this->descriptions[] = '';
    }
    public function removeDescription($index)
    {
        unset($this->descriptions[$index]);
        $this->descriptions = array_values($this->descriptions);
    }


    public function mount()
    {
        $this->why_choose_list = WhyChooseUs::get();
    }

    public function save()
    {

        $rules = [
            'name' => 'required',
            'icon' => 'required',
        ];

        $this->validate($rules);

        $data = WhyChooseUs::updateOrCreate(
            ['id' => $this->id],
            [
                'name' => $this->name,
                'icon' => $this->icon,
            ]
        );

        WhyChooseUsDetail::where('why_choose_us_id', $data->id)->delete();

        foreach ($this->descriptions as $item) {
            if ($item != '') {
                WhyChooseUsDetail::updateOrCreate(
                    [
                        'why_choose_us_id' => $data->id,
                        'description' => $item
                    ]
                );
            }
        }

        session()->flash('message', 'Saved successfully!');
        $this->reset(['id', 'name', 'icon', 'descriptions']);
        $this->mount();
    }

    public function edit($id)
    {
        $data = WhyChooseUs::findOrFail($id);

        $this->id = $data->id;
        $this->name = $data->name;
        $this->icon = $data->icon;
        $this->descriptions = $data->WhyChooseUsDetails->pluck('description')->toArray();
    }

    public function delete($id)
    {
        WhyChooseUsDetail::where('why_choose_us_id', $id)->delete();
        WhyChooseUs::findOrFail($id)->delete();
        $this->mount();
    }


    public function messages()
    {
        return [
            'other_uri.required' => 'The link is required when Lottie is selected.',
            'other_uri.url' => 'The link must be a valid URL.',
        ];
    }

    public function render()
    {
        return view('livewire.managewebsite.manage-why-choose-us');
    }
}
