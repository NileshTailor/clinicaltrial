<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});


Route::controller(LoginRegisterController::class)->group(function() {

    Route::get('register', 'App\Http\Controllers\Auth\LoginRegisterController@register')->name('register');

    Route::post('/store', 'App\Http\Controllers\Auth\LoginRegisterController@store')->name('store');
    Route::get('/login', 'App\Http\Controllers\Auth\LoginRegisterController@login')->name('login');
    Route::post('/authenticate', 'App\Http\Controllers\Auth\LoginRegisterController@authenticate')->name('authenticate');
    Route::get('/dashboard', 'App\Http\Controllers\Auth\LoginRegisterController@dashboard')->name('dashboard');
    Route::post('/logout', 'App\Http\Controllers\Auth\LoginRegisterController@logout')->name('logout');
});



Route::controller(SubjectScreeningController::class)->group(function() {
    Route::get('screening', 'App\Http\Controllers\Auth\SubjectScreeningController@screening')->name('screening');

    Route::post('/store', 'App\Http\Controllers\Auth\SubjectScreeningController@store')->name('store');
});