<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
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

// Authentication Routes
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [AuthenticationController::class, 'login_view'])->name('login.view');
    Route::post('/login', [AuthenticationController::class, 'login_process'])->name('login.process');
});


// Authenticated Users Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('services', function() {
        return view('services');
    })->name('services');
    
    Route::get('add-service', function() {
        return view('addNewServiceForm');
    })->name('add-service');
});

