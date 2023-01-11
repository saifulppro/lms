<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseCreate extends Component
{
    public $name;
    public $description;
    public $price;
    public $time;
    public $end_Date;
    public $days = [
        'sunday',
        'monday',
        'tuesday',
        'thursday',
        'friday',
        'saturday',
    ];
    public $selectedDays = [];



    protected $rules =[
        'name' => 'required|unique:course,name',
        'description' => 'required',
        'price' => 'required'
    ];

    public function formSubmit(){
        $this->validate();
        $course = Course::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => auth()->user()->id
        ]);
        foreach($this->selectedDays as $day)
            
        endforeach

    }

    public function render()
    {
        return view('livewire.course-create');
    }
}
