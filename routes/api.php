<?php

use App\Http\Controllers\OfficeController;
use App\Http\Controllers\EmployeeProfileController;
use App\Http\Controllers\EmployeeRoleController;
use App\Http\Controllers\MfoController;
use App\Http\Controllers\StrategicPlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeriodController;
use App\Models\AnalysisController;
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

Route::controller(EmployeeRoleController::class)->group(function () {
    Route::get('employee-role/list', 'index');
    Route::get('employee-role/{id}', 'show');
    Route::post('employee-role/', 'store');
    Route::put('employee-role/{id}', 'update');
    Route::delete('employee-role/{id}', 'destroy');
});

Route::controller(MfoController::class)->group(function () {
    Route::get('mfo/list', 'index');
    Route::get('mfo/{id}', 'show');
    Route::post('mfo/', 'store');
    Route::put('mfo/{id}', 'update');
    Route::delete('mfo/{id}', 'destroy');
});


Route::controller(StrategicPlanController::class)->group(function () {
    Route::get('strategic-plan/list', 'index');
    Route::get('strategic-plan/ipcr/list', 'ipcrForApproval');
    Route::get('strategic-plan/opcr/list', 'opcrForApproval');
    Route::get('strategic-plan/{id}', 'show');
    Route::post('strategic-plan/', 'store');
    Route::put('strategic-plan/{id}', 'update');
    Route::delete('strategic-plan/{id}', 'destroy');

    Route::put('strategic-plan/ipcr/{id}', 'updateIpcr');
    Route::put('strategic-plan/opcr/{id}', 'updateOpcr');
});


Route::controller(UserController::class)->group(function () {
    Route::get('user/list', 'index');
    Route::get('user/{id}', 'show');
    Route::post('user/', 'store');
    Route::put('user/{id}', 'update');
    Route::delete('user/{id}', 'destroy');
});

Route::controller(PeriodController::class)->group(function () {
    Route::get('period/list', 'index');
    Route::get('period/{id}', 'show');
    Route::post('period/', 'store');
    Route::put('period/activate/{id}', 'activate');
    Route::get('period/activate/{id}', 'getActivePeriod');
    Route::put('period/{id}', 'update');
    Route::delete('period/{id}', 'destroy');
});

Route::controller(AnalysisController::class)->group(function () {
    Route::get('analysis/statistic/list', 'statistic');
    Route::get('analysis/user-type/list', 'userType');
    Route::get('analysis/budget-period/list', 'budgetByPeriod');
});
