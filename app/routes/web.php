<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OccasionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
// load the login view
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.showLoginForm');

// handle the login input, filled on the view above
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');


// Only route for adminController
Route::get('/panel', [AdminController::class, 'index'])->name('admin.index');

// CRUD resource controllers.
// the create url would be stored such as: /occasion/create same goes for everything else
Route::resource('occasion', OccasionController::class);
Route::resource('service', ServiceController::class);
Route::resource('message', MessageController::class);
