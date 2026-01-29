<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

// load the login view
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.showLoginForm');

// handle the login input, filled on the view above
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');


// Only route for adminController
Route::get('/panel', [AdminController::class, 'index'])->name('admin.index');

Route::get('/contact', [MessageController::class, 'index'])->name('contact.index');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

