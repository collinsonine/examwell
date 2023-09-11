<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminTopnav extends Component
{
    public function logOut(){
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        $this->redirect('/admin/login');
    }
    public function render()
    {
        return view('livewire.admin-topnav');
    }
}
