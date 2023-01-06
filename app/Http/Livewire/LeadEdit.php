<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class LeadEdit extends Component
{
    public $lead_id;
    public $name;
    public $email;
    public $phone;

    // collect all data from lead
    public function mount(){ //this function from livewire
        $lead = Lead::findOrFail($this->lead_id);
        $this-> lead_id = $lead->id;
        $this->name = $lead->name;
        $this->email = $lead->email;
        $this->phone = $lead->phone;
    }

    public function render()
    {
        $lead = Lead::findOrFail($this->lead_id);
        return view('livewire.lead-edit',[
            'lead' => $lead,
        ]);
    }
    protected $rules = [
        'email' => 'email',
        'phone' => 'required',
    ];

    public function submitForm(){
        $lead = Lead::findOrFail($this->lead_id);
        $this->validate(); //form livewire validation

        $lead->name = $this->name;
        $lead->email = $this->email;
        $lead->phone = $this->phone;
        $lead->save();
        flash()->addSuccess('Lead Updated Successfully');
        return redirect()->route('lead.index');
    }
}
