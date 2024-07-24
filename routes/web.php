<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Logout;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\ForumController;



Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('user.pembelajaran');
});

Route::get('/videolist', function () {
    return view('user.video-list');
});

Route::get('/forum', [ForumController::class, 'index']);
Route::post('/forum/create', [ForumController::class, 'store'])->name('forum.store');

Route::get('/kalkulator', function () {
    return view('user.kalkulator');
});

Route::get('/diagnostik', function () {
    return view('user.diagnostik');
});

Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan');

Route::get('/penyewaan/{id}', [PenyewaanController::class, 'show'])->name('penyewaan.show');


Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', Dashboard::class)->name('dashboard');
    Route::get('/logout', Logout::class)->name('logout');
});
