<?php

// use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

    Route::middleware(['auth', AdminMiddleware::class])->group(function () {

        Route::get('/admin/dashboard', [BackendController::class, 'index'])->name('dashboard');
        
        Route::get('/admin/users', [BackendController::class, 'users'])->name('admin.users.index');
        Route::get('/admin/users/create', [BackendController::class, 'create'])->name('admin.users.create');
        
        Route::get('/admin/settings', [BackendController::class, 'settings'])->name('admin.settings');

    });