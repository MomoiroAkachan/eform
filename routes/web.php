<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});