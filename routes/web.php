<?php

use App\Http\Controllers\HabitController;
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

    Route::get('/dashboard/habits/create', [HabitController::class, 'create'])->name('habit.create');
    Route::post('/dashboard/habits', [HabitController::class, 'store'])->name('habit.store');
    Route::delete('/dashboard/habits/{habit}', [HabitController::class, 'destroy'])->name('habit.destroy');
    Route::get('/dashboard/habits/{habit}', [HabitController::class, 'edit'])->name('habit.edit');
    Route::put('/dashboard/habits/{habit}', [HabitController::class, 'update'])->name('habit.update');
});

