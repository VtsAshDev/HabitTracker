<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);
Route::get('/login',[LoginController::class, 'index'])->name('site.login');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::get('/register',[RegisterController::class, 'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout',[LoginController::class, 'logout'])->name('auth.logout');
});
