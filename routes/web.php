<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Logout;

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('user.pembelajaran');
});

Route::get('/videolist', function () {
    return view('user.video-list');
});

Route::get('/forum', function () {
    return view('user.forum');
});

Route::get('/kalkulator', function () {
    return view('user.kalkulator');
});

Route::get('/diagnostik', function () {
    return view('user.diagnostik');
});

Route::get('/penyewaan', function () {
    return view('user.penyewaan');
});

Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', Dashboard::class)->name('dashboard');
    Route::get('/logout', Logout::class)->name('logout');
});