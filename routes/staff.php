<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staff\DashboardController;


Route::prefix('staff')->name('staff.')->middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Brand Route Define
});
