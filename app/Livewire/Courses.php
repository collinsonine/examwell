<?php

namespace App\Livewire;

use App\Models\Courses as ModelsCourses;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Courses extends Component
{
    use WithPagination;
    public $search;

    public function viewCourse($id){
        $this->redirect('/admin/view-course/');
    }

    #[On('course-created')]
    public function render()
    {
        $courses = !empty($this->search) ? ModelsCourses::where('name', 'like', '%' . $this->search . '%')->paginate(5) : ModelsCourses::latest()->paginate(5);
        return view('livewire.courses', ['courses' => $courses]);
    }
}
