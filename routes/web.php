<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "web"
| middleware group. Now create something great!
|
*/

Route::get('/', [TableController::class, 'index']);

Route::get('/tables/create', [TableController::class, 'create']);

Route::get('/tables/{id}', [TableController::class, 'show']);

Route::post('/tables', [TableController::class, 'store']);
