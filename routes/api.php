<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhysicianController;
use App\Http\Controllers\PrescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CLINICS
Route::get(
    'clinics',
    [ClinicController::class, 'index']
);

Route::get(
    'clinics/{id}',
    [ClinicController::class, 'getById']
);

Route::post(
    'clinics',
    [ClinicController::class, 'store']
);


Route::put(
    'clinics/{id}',
    [ClinicController::class, 'update']
);

Route::delete(
    'clinics/{id}',
    [ClinicController::class, 'delete']
);

// PATIENTS
Route::get(
    'patients',
    [PatientController::class, 'index']
);

Route::get(
    'patients/{id}',
    [PatientController::class, 'getById']
);

Route::post(
    'patients',
    [PatientController::class, 'store']
);


Route::put(
    'patients/{id}',
    [PatientController::class, 'update']
);

Route::delete(
    'patients/{id}',
    [PatientController::class, 'delete']
);

// PHYSICIANS
Route::get(
    'physicians',
    [PhysicianController::class, 'index']
);

Route::get(
    'physicians/{id}',
    [PhysicianController::class, 'getById']
);

Route::post(
    'physicians',
    [PhysicianController::class, 'store']
);


Route::put(
    'physicians/{id}',
    [PhysicianController::class, 'update']
);

Route::delete(
    'physicians/{id}',
    [PhysicianController::class, 'delete']
);


// PRESCRIPTIONS
Route::get(
    'physicians',
    [PrescriptionController::class, 'index']
);

Route::get(
    'physicians/{id}',
    [PrescriptionController::class, 'getById']
);

Route::post(
    'physicians',
    [PrescriptionController::class, 'store']
);


Route::put(
    'physicians/{id}',
    [PrescriptionController::class, 'update']
);

Route::delete(
    'physicians/{id}',
    [PrescriptionController::class, 'delete']
);
