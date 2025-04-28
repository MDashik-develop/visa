<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');

// =============== Visa Assistance ===============
    Route::get('/visa-assistance', [FrontendController::class, 'VisaAssistance'])->name('visa.assistance');
    Route::get('/visa-assistance/get', [FrontendController::class, 'VisaAssistanceGet'])->name('visa.assistance.get');
    Route::get('/visa-assistance/result', [FrontendController::class, 'VisaAssistanceResult'])->name('visa.assistance.result');

// =============== Study Abroad ===============
    Route::get('/study-abroad', [FrontendController::class, 'StudyAbroad'])->name('study.abroad');
    Route::get('/study-abroad/get', [FrontendController::class, 'StudyAbroadGet'])->name('study.abroad.get');
    Route::get('/study-abroad/result', [FrontendController::class, 'StudyAbroadResult'])->name('study.abroad.result');

// =============== Massage + Subscribe ===============
    Route::post('/message', [FrontendController::class, 'message'])->name('message');
    Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');