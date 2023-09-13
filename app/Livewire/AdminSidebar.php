<?php

namespace App\Livewire;

use App\Models\Settings;
use Livewire\Component;
use Livewire\Attributes\On;

class AdminSidebar extends Component
{

    // public function reloadPage(){
    //     $this->resetPage();
    // }
    #[On('settings-updated')]
    public function render()
    {
        $sidebar = Settings::latest()->first();
        return view('livewire.admin-sidebar', ['sidebar' => $sidebar]);
    }
}
