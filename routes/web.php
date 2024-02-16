<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->middleware('auth')->name('homepage');

Route::get('register', Register::class)->middleware('guest')->name('register');

Route::get('login', Login::class)->middleware('guest')->name('login');

Route::match(['get', 'post'], 'logout', function () {
    auth()->logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
})->middleware('auth')->name('logout');
