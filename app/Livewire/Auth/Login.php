<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.app-layout')]
class Login extends Component
{
    #[Rule('required|email')]
    public $email;
    #[Rule('required|min:8')]
    public $password;

    public function authenticate()
    {
        $validated = $this->validate();

        if (auth()->attempt($validated)) :
            request()->session()->regenerate();

            return redirect()->route('homepage');
        endif;

        session()->flash('error', 'Incorrect Credentials');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
