<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     if (auth()->user()->role === 'admin') {
//         return view('dashboard'); // Admin view
//     }
//     return view('home'); // Normal user view
// })->middleware(['auth', 'verified'])->name('dashboard');



// Normal user dashboard



// Route::middleware(['auth', AdminMiddleware::class])->group(function () {
//    Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/frontend.php';