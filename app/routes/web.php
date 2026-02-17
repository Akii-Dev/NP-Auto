<?php

use App\Http\Controllers\OccasionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('index');

// load the login view
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.showLoginForm');

// handle the login input, filled on the view above
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');


// adminController routes
Route::get('/panel', [AdminController::class, 'index'])->name('admin.index');
Route::get('/panel/occasions', [OccasionController::class, 'adminOccasions'])->name('admin.occasions');
Route::get('/panel/services', [ServiceController::class, 'adminServices'])->name('admin.services');
Route::get('/panel/messages', [MessageController::class, 'adminMessages'])->name('admin.messages');

// CRUD resource controllers.
// the create url would be stored such as: /occasion/create same goes for everything else
Route::resource('occasion', OccasionController::class);
Route::resource('service', ServiceController::class);
Route::resource('message', MessageController::class);

// Message and contact form routes. Change these into the message resourcecontroller later:
Route::get('/contact', [MessageController::class, 'index'])->name('contact.index');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

Route::get('/occasions', [OccasionController::class, 'index'])->name('occasions.index');
Route::get('/occasions/{occasion}', [OccasionController::class, 'show'])->name('occasions.show');

// Alle services overzicht
Route::get('/service-onderhoud', function () {
    return view('services'); // services.blade.php
});


// Detailpagina per service
Route::get('/services/{service}', function ($service) {
    $service = Service::where('title', str_replace('-', ' ', $service))->firstOrFail();
    return view('service-detail', ['service' => $service]);
});
