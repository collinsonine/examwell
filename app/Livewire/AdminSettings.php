<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use App\Models\Settings;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AdminSettings extends Component
{
    use WithFileUploads;

    #[Rule('required|min:2|max:50')]
    public $appname;
    #[Rule('required|min:2|max:50')]
    Public $student_id_prefix;

    // #[Rule('image|max:1024')]
    public $logo;
    public $favicon;
    public $meta_image;
    #[Rule('required|min:2|max:50')]
    public $copyright_text;
    #[Rule('required|min:2|max:50')]
    public $meta_description;
    public $settingId;

    // public function placeholder(){
    //     return view('livewire.formloading');
    // }

    public function save(){
        $validated = $this->validate();
        try {
            $settings = Settings::findOrfail($this->settingId);

            $path = Storage::putFile('uploads', $this->logo);
            $settings->logo = $path;
            $settings->app_name = $this->appname;
            $settings->student_id_prefix = $this->student_id_prefix;
            $settings->copyright_text = $this->copyright_text;
            $settings->meta_description = $this->meta_description;

            $settings->update();
        } catch (Exception $e) {
            //throw $th;
        }
        session()->flash('success', 'Updated Successfully');
    }
    public function render()
    {
        $settings = Settings::latest()->first();
        $this->settingId = $settings->id;
        $this->appname = $settings->app_name;
        $this->student_id_prefix = $settings->student_id_prefix;
        $this->logo = $settings->logo;
        $this->favicon = $settings->favicon;
        $this->meta_image = $settings->meta_image;
        $this->meta_description = $settings->meta_description;
        $this->copyright_text = $settings->copyright_text;
        return view('livewire.admin-settings');
    }
}
