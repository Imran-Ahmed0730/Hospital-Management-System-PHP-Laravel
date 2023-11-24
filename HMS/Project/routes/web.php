<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//    Patient Module
    Route::get('/patient/add', [PatientController::class, 'index'])->name('patient.add');
    Route::post('/patient/add', [PatientController::class, 'add'])->name('patient.add');
    Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::post('/patient/update', [PatientController::class, 'update'])->name('patient.update');
    Route::get('/patient/details/{id}', [PatientController::class, 'details'])->name('patient.details');
    Route::post('/patient/remove', [PatientController::class, 'remove'])->name('patient.remove');
    Route::get('/patient/all-patients', [PatientController::class, 'manage'])->name('patient.manage');
});
