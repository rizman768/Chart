<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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
    return redirect('login');
});

// 
Route::get('dashboard', [ChartController::class, 'dashboard'])->middleware('auth');
Route::get('index', [ChartController::class, 'index'])->name('index')->middleware('auth');

//Auth
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('userlogin', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

Route::middleware(['auth','cekrole:1'])->group(function () {

	//User
	Route::get('manajemenuser', [UserController::class, 'index'])->name('manajemenuser');
	Route::get('tambahuser', [UserController::class, 'tambahuser']);
	Route::post('storetambahuser', [UserController::class, 'create']);
	Route::get('edituser/{id}', [UserController::class, 'edituser']); 
	Route::post('updateuser', [UserController::class, 'update']);
	Route::post('deleteuser/{id}', [UserController::class, 'delete']);

	//Role
	Route::get('manajemenrole', [RoleController::class, 'index'])->name('manajemenrole');
	Route::get('tambahrole', [RoleController::class, 'tambahrole']);
	Route::post('storetambahrole', [RoleController::class, 'create']);
	Route::get('editrole/{id}', [RoleController::class, 'editrole']); 
	Route::post('updaterole', [RoleController::class, 'updaterole']);
	Route::post('deleterole/{id}', [RoleController::class, 'delete']);
});



