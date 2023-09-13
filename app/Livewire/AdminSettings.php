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

    #[Rule('nullable|image|max:1024')]
    public $logo;

    #[Rule('nullable|image|max:1024')]
    public $favicon;
    #[Rule('nullable|image|max:1024')]
    public $meta_image;
    #[Rule('required|min:2|max:50')]
    public $copyright_text;
    #[Rule('required|min:2|max:50')]
    public $meta_description;
    public $settingId;

    // public function placeholder(){
    //     return view('livewire.formloading');
    // }

    public function save($id){
        $validated = $this->validate();
        try {
            $settings = Settings::findOrfail($id);

            if($this->logo){
               $filepath = $this->logo->store('uploads', 'public');
               $settings->logo = $filepath;
            }
            if($this->favicon){
                $faviconpath = $this->favicon->store('uploads', 'public');
                $settings->favicon = $faviconpath;
            }
            if($this->meta_image){
                $metapath = $this->meta_image->store('uploads', 'public');
                $settings->meta_image = $metapath;
            }
            $settings->app_name = $this->appname;
            $settings->student_id_prefix = $this->student_id_prefix;
            $settings->copyright_text = $this->copyright_text;
            $settings->meta_description = $this->meta_description;
            $settings->update();
            session()->flash('success', 'Updated Successfully');
            $this->dispatch('settings-updated');
            // $this->resetPage();
        } catch (Exception $e) {
            //throw $th;

        }

    }
    public function render()
    {
        $settings = Settings::latest()->first();
        $this->settingId = $settings->id;
        $this->appname = $settings->app_name;
        $this->student_id_prefix = $settings->student_id_prefix;
        $this->meta_description = $settings->meta_description;
        $this->copyright_text = $settings->copyright_text;
        return view('livewire.admin-settings', ['settings' => $settings]);
    }
}
