<?php

// use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\VisaController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CountriesController;
use App\Http\Controllers\backend\VisaTypeController;
use App\Http\Controllers\Backend\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Models\WebsiteContent;

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
        Route::get('/admin/visa', [VisaTypeController::class, 'index'])->name('admin.visa.index');
        Route::get('/admin/visa/create', [VisaTypeController::class, 'create'])->name('admin.visa.create');
        Route::post('/admin/visa/store', [VisaTypeController::class, 'store'])->name('admin.visa.store');
        Route::get('/admin/visa/{id}/edit', [VisaTypeController::class, 'edit'])->name('admin.visa.edit');
        Route::put('/admin/visa/{id}/update', [VisaTypeController::class, 'update'])->name('admin.visa.update');
        Route::delete('/admin/visa/{id}/delete', [VisaTypeController::class, 'destroy'])->name('admin.visa.delete');

        // =============== Cuntries ===============
        Route::get('/admin/countries', [CountriesController::class, 'index'])->name('admin.countries.index');
        Route::get('/admin/countries/create', [CountriesController::class, 'create'])->name('admin.countries.create');
        Route::post('/admin/countries/store', [CountriesController::class, 'store'])->name('admin.countries.store');
        Route::get('/admin/countries/{id}/edit', [CountriesController::class, 'edit'])->name('admin.countries.edit');
        Route::put('/admin/countries/{id}/update', [CountriesController::class, 'update'])->name('admin.countries.update');
        Route::delete('/admin/countries/{id}/delete', [CountriesController::class, 'destroy'])->name('admin.countries.delete');
        
        // =============== Application ===============
        Route::get('/admin/application', [ApplicationController::class, 'index'])->name('admin.applications.index');
        Route::get('/admin/application/create', [ApplicationController::class, 'create'])->name('admin.applications.create');
        Route::post('/admin/application/store', [ApplicationController::class, 'store'])->name('admin.applications.store');
        Route::get('/admin/application/{id}/edit', [ApplicationController::class, 'edit'])->name('admin.applications.edit');
        Route::put('/admin/application/{id}/update', [ApplicationController::class, 'update'])->name('admin.applications.update');
        Route::delete('/admin/application/{id}/delete', [ApplicationController::class, 'destroy'])->name('admin.applications.delete');

        // =============== Website ===============
        Route::get('/admin/website', [WebsiteController::class, 'index'])->name('admin.website.index');    
        Route::post('/admin/website', [WebsiteController::class, 'store'])->name('admin.website.save');

        // =============== Website Contetn ===============
        Route::get('/admin/website/content', [WebsiteContent::class, 'index'])->name('admin.website.content');
        


    });