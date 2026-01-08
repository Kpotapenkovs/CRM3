<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\AnalystController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SessionController::class, "create"])->name("login");

Route::post('/', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/broker', [BrokerController::class, 'index'])->middleware('rolechecker:broker,admin');

Route::get('/inspector', [InspectorController::class, 'index'])->middleware('rolechecker:inspector,admin');

Route::get('/analyst', [AnalystController::class, 'index'])->middleware('rolechecker:analyst,admin');

Route::get('/admin', [AdminController::class, 'index'])->middleware('rolechecker:admin');

Route::get('/inspections/{inspection}', [InspectorController::class, 'showInspections'])->middleware('rolechecker:inspector,admin');


Route::get('/cases/{case}', [CrmController::class, 'showCases']);

Route::get('/cases', [CrmController::class, 'cases']);


Route::get('/vehicles', [CrmController::class, 'vehicles']);

Route::get('/vehicles/{vehicle}', [CrmController::class, 'showVehicles']);


Route::get('/documents', [CrmController::class, 'documents']);

Route::get('/documents/{document}', [CrmController::class, 'showDocuments']);


Route::get('/parties', [CrmController::class, 'parties']);

Route::get('/parties/{part}', [CrmController::class, 'showParties']);


Route::get('/users', [CrmController::class, 'users']);

Route::get('users/create', [CrmController::class, 'createUser']);

Route::get('/users/{user}', [CrmController::class, 'showUsers']);



Route::post('/users', [CrmController::class, 'store']);





