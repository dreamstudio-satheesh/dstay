<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
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

Auth::routes([

    'register' => false, // Register Routes...
  
    'reset' => false, // Reset Password Routes...
  
    'verify' => false, // Email Verification Routes...
  
  ]);

  
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function () {

    
  Route::get('/', [HomeController::class, 'root'])->name('root');
  Route::get('/users', [UserController::class, 'index'])->name('users.index');
  Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
  Route::post('/users', [UserController::class, 'store'])->name('users.store');
  Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
  

  Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
  Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
  Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
  Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');


  Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
  Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
  Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
  Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
  Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
  Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
  Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

  Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
  Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
  Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
  Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
  Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
  Route::put('/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');
  Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');

});

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
