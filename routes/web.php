<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\SurveyController;

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

Route::get('/', [SurveyController::class, 'survey_view'])->name('survey.survey_view');

// Authentication Routes
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [AuthenticationController::class, 'login_view'])->name('login.view');
    Route::post('/login', [AuthenticationController::class, 'login_process'])->name('login.process');
});

Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');


// Authenticated Users Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('services', [AuthenticatedController::class, 'services_view'])->name('services.view');
    Route::post('services', [AuthenticatedController::class, 'save_service'])->name('services.save_service');
    Route::get('services/all', [AuthenticatedController::class, 'get_services'])->name('services.get_services');
    Route::get('service/{id}/edit', [AuthenticatedController::class, 'get_service'])->name('services.get_service');
    Route::post('service/{id}/edit', [AuthenticatedController::class, 'update_service'])->name('services.update_service');
    Route::delete('service/{id}/delete', [AuthenticatedController::class, 'delete_service'])->name('services.delete_service');
});

