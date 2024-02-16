<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.app-layout')]
class Register extends Component
{
    #[Rule('required')]
    public $name;
    #[Rule('required|email|unique:users,email')]
    public $email;
    #[Rule('required|min:8')]
    public $password;

    public function register()
    {
        $validated = $this->validate();
        $user = User::create($validated);

        request()->session()->regenerate();
        Auth::login($user);
        return redirect()->route('homepage');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
