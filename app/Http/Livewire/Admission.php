<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Lead;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;


class Admission extends Component
{
    public $search;
    public $leads = [];
    public $lead_id; //for model use purpose
    public $course_id; // for model use purpose
    public $selectedCourse;
    


    public function render()
    {
        $courses = Course::all();
        return view('livewire.admission',[
            'courses' => $courses,
        ]);
    }
    
    public function search(){
        $this->leads = Lead::where('name', 'like','%' . $this->search . '%')
        ->orWhere('email', 'like','%' . $this->search . '%')
        ->orWhere('phone', 'like','%' . $this->search . '%')
        ->get();
        
    }
    public function courseSelected(){
        $this->selectedCourse = Course::find($this->course_id);
    }
    public function admit(){
        $lead = Lead::findOrFail($this->lead_id)->first();
        $user = User::create([
            'name' => $lead->name,
            'email' => $lead->email,
            'password' => bcrypt(Str::random(6)),
        ]);
        $lead->delete();

        $invoice = Invoice::create([
            'due_date' => now()->addDays(7), // 7 days pore payment dite hobe.
            'user_id' => $user->id,
        ]);

       InvoiceItem::create([
            'name' => 'Course: '. $this->selectedCourse->name,
            'price' => $this->selectedCourse->price,
            'quantity' =>1,
            'invoice_id' => $invoice->id,
        ]);

        $this->selectedCourse = null;
        $this->course_id = null;
        $this->lead_id = null;
        $this->search = null;
        $this->leads = [];

        flash()->addSuccess('Admission Success');
    }
}
