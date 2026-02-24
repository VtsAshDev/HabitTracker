<?php

use Illuminate\Support\Facades\Route;

Route::get('/welccome', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
