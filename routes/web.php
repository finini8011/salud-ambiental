<?php

use App\Http\Controllers\HomeAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [InicioController::class, 'index']);

Route::get('/homeAdmin', [HomeAdminController::class, 'homeAdmin'])->name('homeAdmin');
Route::post('/inicioAdmin', [HomeAdminController::class, 'inicioAdmin'])->name('inicioAdmin');
Route::get('/dashboardAdmin', [HomeAdminController::class, 'dashboardAdmin'])->name('dashboardAdmin');
Route::get('/logout', [HomeAdminController::class, 'logout'])->name('logout');
Route::get('/loadView/{id}',[HomeAdminController::class, 'loadView'])->name('loadView');
Route::post('/saveFile',[HomeAdminController::class, 'saveFile'])->name('saveFile');
Route::get('/menuAdmin',[HomeAdminController::class, 'menuAdmin'])->name('menuAdmin');
