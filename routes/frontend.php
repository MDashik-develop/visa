<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::post('/massage', [FrontendController::class, 'massage'])->name('massage');
Route::get('/visa-assistance', [FrontendController::class, 'VisaAssistance'])->name('visa.assistance');
Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');