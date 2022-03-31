<?php

use App\Http\Controllers\OfficeController;
use App\Http\Controllers\EmployeeProfileController;
use Illuminate\Support\Facades\Route;

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

Route::controller(OfficeController::class)->group(function () {
    Route::get('office/list', 'index');
    Route::get('office/{id}', 'show');
    Route::post('office/', 'store');
    Route::put('office/{id}', 'update');
    Route::delete('office/{id}', 'destroy');
});

Route::controller(EmployeeProfileController::class)->group(function () {
    Route::get('employee-profile/list', 'index');
    Route::get('employee-profile/{id}', 'show');
    Route::post('employee-profile/', 'store');
    Route::put('employee-profile/{id}', 'update');
    Route::delete('employee-profile/{id}', 'destroy');
});
