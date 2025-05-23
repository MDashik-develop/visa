<?php

// use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\VisaController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CountriesController;
use App\Http\Controllers\Backend\DegreeController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\StudyController;
use App\Http\Controllers\Backend\SubscribeController;
use App\Http\Controllers\Backend\UniversityController;
use App\Http\Controllers\backend\VisaTypeController;
use App\Http\Controllers\Backend\WebsiteContentController;
use App\Http\Controllers\Backend\WebsiteController;
use App\Http\Controllers\Backned\StudypogramController;
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
        Route::get('/admin/website/content', [WebsiteContentController::class, 'index'])->name('admin.website.content');
        Route::post('/admin/website/content/slider/store', [WebsiteContentController::class, 'SliderStore'])->name('admin.slider.store');
        Route::get('/admin/website/content/{id}/edit', [WebsiteContentController::class, 'SliderEdit'])->name('admin.slider.edit');
        Route::put('/admin/website/content/{id}/update', [WebsiteContentController::class, 'SliderUpdate'])->name('admin.slider.update');
        Route::delete('/admin/website/content/{id}/delete', [WebsiteContentController::class, 'SliderDestroy'])->name('admin.slider.delete');

        // =============== Massage ===============
        Route::get('/admin/message', [MessageController::class, 'index'])->name('admin.message');
        Route::delete('/admin/message/{id}', [MessageController::class, 'destroy'])->name('admin.message.delete');

        // =============== Subscribe ===============
        Route::get('/admin/message/subscribe', [SubscribeController::class, 'index'])->name('admin.subscribe');
        Route::delete('/admin/message/subscribe/{id}', [SubscribeController::class, 'destroy'])->name('admin.subscribe.delete');
        Route::get('/admin/export-subscribers', [SubscribeController::class, 'export'])->name('admin.export.subscribers');

        // =============== Study ===============
        Route::get('/admin/study', [StudypogramController::class, 'index'])->name('admin.study.index');
        Route::get('/admin/study/create', [StudypogramController::class, 'create'])->name('admin.study.create');
        Route::post('/admin/study/store', [StudypogramController::class, 'store'])->name('admin.study.store');
        Route::get('/admin/study/{id}/edit', [StudypogramController::class, 'edit'])->name('admin.study.edit');
        Route::put('/admin/study/{id}/update', [StudypogramController::class, 'update'])->name('admin.study.update');
        Route::delete('/admin/study/{id}/delete', [StudypogramController::class, 'destroy'])->name('admin.study.delete');

        // =============== Degree ===============
        Route::get('/admin/degree', [DegreeController::class, 'index'])->name('admin.degree.index');
        Route::get('/admin/degree/create', [DegreeController::class, 'create'])->name('admin.degree.create');
        Route::post('/admin/degree/store', [DegreeController::class, 'store'])->name('admin.degree.store');
        Route::get('/admin/degree/{id}/edit', [DegreeController::class, 'edit'])->name('admin.degree.edit');
        Route::put('/admin/degree/{id}/update', [DegreeController::class, 'update'])->name('admin.degree.update');
        Route::delete('/admin/degree/{id}/delete', [DegreeController::class, 'destroy'])->name('admin.degree.delete');

        // =============== University ===============
        Route::get('/admin/university', [UniversityController::class, 'index'])->name('admin.university.index');
        Route::get('/admin/university/create', [UniversityController::class, 'create'])->name('admin.university.create');
        Route::post('/admin/university/store', [UniversityController::class, 'store'])->name('admin.university.store');
        Route::get('/admin/university/{id}/edit', [UniversityController::class, 'edit'])->name('admin.university.edit');
        Route::put('/admin/university/{id}/update', [UniversityController::class, 'update'])->name('admin.university.update');
        Route::delete('/admin/university/{id}/delete', [UniversityController::class, 'destroy'])->name('admin.university.delete');


    });