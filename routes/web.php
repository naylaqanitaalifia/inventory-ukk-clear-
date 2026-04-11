<?php


// use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LendingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing-page');
})->name('landing-page');


Route::name('admin.')->group(function() {
    Route::resource('categories', CategoryController::class);
    // Route::resource('items', ItemController::class);
});


// <?php

// use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// use App\Http\Controllers\Operator\DashboardController as OperatorDashboardController;
// use App\Http\Controllers\Admin\ItemController;
// use App\Http\Controllers\Admin\LendingController as AdminLendingController;
// use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\AuthController;
// // use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\LendingController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.landing-page');
// })->name('landing-page');

// Route::get('login', [AuthController::class, 'index'])->name('login.form');
// Route::post('login', [AuthController::class, 'login'])->name('login');
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// // Route::middleware('auth')->group(function() {
// //     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// // });

// // Route::middleware(['auth', 'role:admin'])->group(function() {
//     Route::name('admin.')->group(function() {
//         Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
//         Route::resource('categories', CategoryController::class);
//         // Route::resource('items', ItemController::class)->except('show');
//         // Route::resource('lendings', AdminLendingController::class);
//         // Route::resource('lendings', ItemController::class);
//         Route::get('lendings/{item}/detail', [ItemController::class, 'show'])->name('lendings.show');

//         Route::resource('admins', UserController::class);
//         Route::resource('operators', UserController::class);
//         Route::put('operators/{operator}/reset-password', [UserController::class, 'resetPassword'])->name('operator.reset-password');
//     });
// // });


// // Route::middleware(['auth', 'role:staff'])->group(function() {
//     Route::name('staff.')->group(function() {
//         Route::get('dashboard', [OperatorDashboardController::class, 'index'])->name('dashboard');
//         // Route::resource('items',)
//         Route::resource('lendings', LendingController::class);
//         Route::post('lendings/{detail}/return', [LendingController::class, 'returnItem'])->name('lendings.return');
//     });

// // });
