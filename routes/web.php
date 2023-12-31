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
    return view('feedback-form');
});

Route::get('login', function() {
    return view('login');
})->name('login');

Route::get('dashboard', function() {
    return view('dashboard');
})->name('dashboard');


Route::get('services', function() {
    return view('services');
})->name('services');

Route::get('add-service', function() {
    return view('addNewServiceForm');
})->name('add-service');