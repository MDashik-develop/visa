<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/visa-assistance', [FrontendController::class, 'VisaAssistance'])->name('visa.assistance');
Route::get('/visa-assistance/get', [FrontendController::class, 'VisaAssistanceGet'])->name('visa.assistance.get');

// =============== Massage + Subscribe ===============
    Route::post('/message', [FrontendController::class, 'message'])->name('message');
    Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');