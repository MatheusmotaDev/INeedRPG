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

use App\Http\Controllers\RpController;

Route::get('/', [RpController::class, 'index']);

Route::get('/mesas/create', [RpController::class, 'create']);

Route::get('/mesas/{id}', [RpController::class, 'show']);

Route::post('/mesas', [RpController::class, 'store']);



