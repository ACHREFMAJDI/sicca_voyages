<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login', 'layouts.app');
});

Route::get('/register', function () {
    return view('register', 'layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/vols', App\Http\Controllers\VolController::class);
Route::resource('/chambres', App\Http\Controllers\ChambreController::class);
Route::resource('/hotels', App\Http\Controllers\HotelController::class);
Route::resource('/transports', App\Http\Controllers\TransportController::class);
Route::resource('/services', App\Http\Controllers\ServiceController::class);
Route::resource('/clients', App\Http\Controllers\ClientController::class);
