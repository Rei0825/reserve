<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/reception', [ReservationController::class, 'reception']);
Route::get('/information', [ReservationController::class, 'information']);
Route::get('/confirmation', [ReservationController::class, 'confirmation']);
