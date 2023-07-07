<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationReservationsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

// === Login & Register ===
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

// ==== Index ====
Route::middleware([])->get('/', [IndexController::class, 'get']);

// ==== Login ====
Route::get('/login', function() {
    return view('auth.login');
});

Route::post('/login', [UserController::class, 'login']);

// ==== Registration ====
Route::get('/register', function() {
    return view('auth.register');
});


Route::get('/register/user', function() {
    return view('auth.register_user');
});

Route::post('/register/user', [UserController::class, 'registerUser']);


Route::get('/register/agency', function() {
    return view('auth.register_agency');
});

Route::post('/register/agency', [UserController::class, 'registerAgency']);

// ==== Logout ====
Route::get('/logout', [UserController::class, 'logout']);


// ==== Profile ====
Route::get('/profile', [ProfileController::class, 'get']);




// === Destinations ===

Route::get('/destination/create', [DestinationController::class, 'getForm']);
Route::post('/destination/create', [DestinationController::class, 'create']);

Route::get('/destination/{id}/edit', [DestinationController::class, 'getEditForm']);
Route::post('/destination/{id}/edit', [DestinationController::class, 'edit']);

Route::get('/destination/{id}', [DestinationController::class, 'get']);
Route::delete('/destination/{id}', [DestinationController::class, 'delete']);

// === Reservations

Route::post('/reservation/create/{id}', [DestinationReservationsController::class, 'create']);
Route::post('/reservation/approve/{id}', [DestinationReservationsController::class, 'approve']);
Route::post('/reservation/delete/{id}', [DestinationReservationsController::class, 'delete']);


// === Agency ===
Route::get('/agency/{id}', [AgencyController::class, 'get']);

Route::get('/error', function(){
    return view('error-page');
});