<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Component
{
    #[Rule('required|email')]
    public $email;
    #[Rule('required|min:6')]
    public $password;

    public function doLogin(){
        $credentials = $this->validate();

        if (Auth::guard('admin')->attempt($credentials)) {
            session()->regenerate();
            return $this->redirect('dashboard');
        }else {
            session()->flash('error', 'This Credentails does not match our records');
        }
        $this->reset('password');
    }
    public function render()
    {
        return view('livewire.admin-login');
    }
}
