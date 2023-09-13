<?php

namespace App\Livewire;

use App\Models\Courses;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateCourse extends Component
{

    #[Rule('required|min:2|max:200|unique:courses')]
    public $name;
    public function saveCourse(){
        $validated = $this->validateOnly('name');
        Courses::create($validated);
        $this->dispatch('course-created');
        $this->reset('name');
        session()->flash('success', 'Course Created Successfully');
    }
    public function render()
    {
        return view('livewire.create-course');
    }
}
