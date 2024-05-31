<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Shop;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/shop', Shop::class)->name('shop');
