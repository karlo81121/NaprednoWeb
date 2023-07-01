<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//temp routes (obrišite kad budete pisali prave rute)
Route::get('/edit-destination', function(){
    return view('edit-destination');
});

Route::get('/register-as', function(){
    return view('register-as');
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
