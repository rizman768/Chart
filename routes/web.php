<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

// 
Route::get('dashboard', [ChartController::class, 'dashboard'])->middleware('auth');
Route::get('index', [ChartController::class, 'index'])->name('index')->middleware('auth');

//Auth
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);



