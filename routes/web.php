<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home;
use App\Livewire\ShowTemplate;
use App\Livewire\Umkm;
use App\Livewire\WebApplication;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
route::get('/aplikasi-web', WebApplication::class)->name('web-application');
route::get('/umkm', Umkm::class)->name('umkm');
Route::get('/umkm/show', ShowTemplate::class)->name('show-template');
