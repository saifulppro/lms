<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class Admission extends Component
{
    public $search;
    public $leads = [];


    public function render()
    {
        return view('livewire.admission');
    }
    
    public function search(){
        $this->leads = Lead::where('name', 'like','%' . $this->search . '%')
        ->orWhere('email', 'like','%' . $this->search . '%')
        ->orWhere('phone', 'like','%' . $this->search . '%')
        ->get();
        
    }
}
