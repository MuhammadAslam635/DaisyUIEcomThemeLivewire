<?php

use App\Livewire\Auth\RegisterComponent;
use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', HomeComponent::class)->name('home');
Route::get('register', RegisterComponent::class)->name('regitser');
