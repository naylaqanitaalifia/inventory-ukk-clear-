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
