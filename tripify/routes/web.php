<?php

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






//temp routes (obrišite kad budete pisali prave rute)
Route::get('/edit-destination', function(){
    return view('edit-destination');
});

Route::get('/business-registration', function() {
   return view('register-business'); 
});

Route::get('/agency-reservations', function(){
    return view('agency-reservation-list');
});

Route::get('/agency-details', function(){
    return view('agency-details');
});

Route::get('/agency-trip-list', function() {
    return view('agency-trip-list');
});

Route::get('/user-profile', function() {
    return view('user-profile');
});

Route::get('/trip-details', function() {
    return view('trip-details');
});

Route::get('/create-trip', function(){
    return view('create-trip-form');
});

Route::get('/agency-profile', function() {
    return view('agency-profile');
});
