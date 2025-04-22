<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/visa-assistance', [FrontendController::class, 'VisaAssistance'])->name('visa.assistance');

// =============== Massage + Subscribe ===============
    Route::post('/message', [FrontendController::class, 'message'])->name('message');
    Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');
    