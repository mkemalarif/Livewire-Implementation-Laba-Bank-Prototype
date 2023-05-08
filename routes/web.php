<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DataStatus;
use App\http\Controllers\DataController;
use App\http\Controllers\ControllerHome;

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

Route::get('/', [ControllerHome::class, 'show']);

Route::resource('/data', DataController::class);
