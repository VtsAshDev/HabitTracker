<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/welccome', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout',[LoginController::class, 'logout'])->name('auth.logout');
});
