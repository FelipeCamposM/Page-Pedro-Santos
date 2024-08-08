<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchedulingController;

Route::get('/', [HomeController::class, 'index']);
// Route::get('/scheduling/create', [SchedulingController::class, 'scheduling.index']);
Route::get('/scheduling/index', [SchedulingController::class, 'index']);

