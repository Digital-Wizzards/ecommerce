<?php

use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Auth\Register;
use App\Livewire\Pages\Checkout;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\PaymentOption;
use App\Livewire\Pages\Shop;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/payment', PaymentOption::class)->name('payment');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
