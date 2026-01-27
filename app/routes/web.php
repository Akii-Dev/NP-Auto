<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// load the login view
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.showLoginForm');

// handle the login input
Route::post('/login', [UserController::class, 'login'])->name('user.login');


// Only route for adminController
Route::get('/panel', [AdminController::class, 'index'])->name('admin.index');