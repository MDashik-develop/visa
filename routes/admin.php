<?php

// use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Backend\VisaController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CountriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

    Route::middleware(['auth', AdminMiddleware::class])->group(function () {

        Route::get('/admin/dashboard', [BackendController::class, 'index'])->name('dashboard');
        
        Route::get('/admin/users', [BackendController::class, 'users'])->name('admin.users.index');
        Route::get('/admin/users/create', [BackendController::class, 'create'])->name('admin.users.create');
        
        Route::get('/admin/settings', [BackendController::class, 'settings'])->name('admin.settings');

        
        // =============== User ===============
        Route::get('/admin/user', [BackendController::class, 'user'])->name('admin.user.index');
        Route::get('/admin/user/create', [BackendController::class, 'create'])->name('admin.user.create');
        Route::post('/admin/user/store', [BackendController::class, 'store'])->name('admin.user.store');
        Route::get('/admin/user/{id}/edit', [BackendController::class, 'edit'])->name('admin.user.edit');
        Route::put('/admin/user/{id}/update', [BackendController::class, 'update'])->name('admin.user.update');
        Route::delete('/admin/user/{id}/delete', [BackendController::class, 'destroy'])->name('admin.user.delete');

        // =============== Visa ===============
        Route::get('/admin/visa', [VisaController::class, 'visa'])->name('admin.visa.index');
        Route::get('/admin/visa/create', [BackendController::class, 'createVisa'])->name('admin.visa.create');
        Route::post('/admin/visa/store', [BackendController::class, 'storeVisa'])->name('admin.visa.store');
        Route::get('/admin/visa/{id}/edit', [BackendController::class, 'editVisa'])->name('admin.visa.edit');
        Route::put('/admin/visa/{id}/update', [BackendController::class, 'updateVisa'])->name('admin.visa.update');
        Route::delete('/admin/visa/{id}/delete', [BackendController::class, 'destroyVisa'])->name('admin.visa.delete');

        // =============== Cuntries ===============
        Route::get('/admin/countries', [CountriesController::class, 'index'])->name('admin.countries.index');
        Route::get('/admin/countries/create', [CountriesController::class, 'create'])->name('admin.countries.create');
        Route::post('/admin/countries/store', [CountriesController::class, 'store'])->name('admin.countries.store');
        Route::get('/admin/countries/{id}/edit', [CountriesController::class, 'edit'])->name('admin.countries.edit');
        Route::put('/admin/countries/{id}/update', [CountriesController::class, 'update'])->name('admin.countries.update');
        Route::delete('/admin/countries/{id}/delete', [CountriesController::class, 'destroy'])->name('admin.countries.delete');
        

    });