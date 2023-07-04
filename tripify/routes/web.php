<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ==== Index ====
Route::middleware([])->get('/', [IndexController::class, 'get']);

Route::post('register', [RegisterController::class, 'registerUser']);

// === Login & Register ===
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

Route::get('/register-as', function() {
    return view('auth.register-as');
});

Route::get('/register-normal', function() {
    return view('auth.register');
});

Route::get('/register-business', function() {
    return view('auth.register-business');
});

Route::post('register', [RegisterController::class, 'registerUser']);

Route::get('/logout', [RegisterController::class, 'logoutUser']);

Route::post('/loginuser', [RegisterController::class, 'loginUser'])->name('loginuser');
//Route::post('/login-user', [RegisterController::class, 'loginUser'])->name('loginuser');

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
