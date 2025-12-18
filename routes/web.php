<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\AnalystController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SessionController::class, "create"])->name("login");

Route::post('/', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/broker', [BrokerController::class, 'index'])->middleware('rolechecker:broker');

Route::get('/inspector', [InspectorController::class, 'index'])->middleware('rolechecker:inspector');

Route::get('/analyst', [AnalystController::class, 'index'])->middleware('rolechecker:analyst');

Route::get('/admin', [AdminController::class, 'index'])->middleware('rolechecker:admin');