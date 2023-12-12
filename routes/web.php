<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Models\Submenu;

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
Route::get('/archivos_admin',[HomeAdminController::class, 'archivosAdmin'])->name('archivosAdmin');
Route::get('/menu_principal_Admin',[HomeAdminController::class, 'menuPrincipalAdmin'])->name('menuPrincipalAdmin');
Route::post('/save_menu',[HomeAdminController::class, 'saveMenu'])->name('saveMenu');
Route::get('/submenu_Admin',[HomeAdminController::class, 'submenuAdmin'])->name('submenuAdmin');
Route::get('/submenu2_Admin',[HomeAdminController::class, 'submenu2Admin'])->name('submenu2Admin');
Route::post('/edit_submenu/{id}',[HomeAdminController::class, 'editSubmenu'])->name('editSubmenu');
Route::post('/edit_submenu2',[HomeAdminController::class, 'editSubmenu2'])->name('editSubmenu2');
Route::get('/transversales_Admin',[HomeAdminController::class, 'transversalesAdmin'])->name('transversalesAdmin');
Route::get('/modificar_transversal/{id}',[HomeAdminController::class, 'ModificarTransversal'])->name('ModificarTransversal');
Route::post('/save_transversales',[HomeAdminController::class, 'saveTransversales'])->name('saveTransversales');
Route::get('/loadViewMenu/{id}/{submenuId}',[HomeAdminController::class, 'loadViewMenu'])->name('loadViewMenu');
Route::get('/loadViewMenuTransversal/{id}/{submenuId}',[HomeAdminController::class, 'loadViewMenuTransversal'])->name('loadViewMenuTransversal');
Route::get('/paginas_Admin',[HomeAdminController::class, 'paginasAdmin'])->name('paginasAdmin');
Route::get('/subir_archivos_Admin',[HomeAdminController::class, 'subirArchivosAdmin'])->name('subirArchivosAdmin');
Route::get('/crear_modificar_pagina/{id}',[HomeAdminController::class, 'crearModificarPagina'])->name('crearModificarPagina');
Route::post('/save_pagina',[HomeAdminController::class, 'savePagina'])->name('savePagina');
Route::post('/save_archivo',[HomeAdminController::class, 'saveArchivo'])->name('saveArchivo');
Route::get('/eliminar_archivo/{id}',[HomeAdminController::class, 'deleteArchivo'])->name('deleteArchivo');
Route::get('/download_file/{archivo}', [HomeAdminController::class, 'downloadFile']);
Route::get('/calendario', [CalendarController::class, 'index'])->name('index');
Route::get('/calendar', [EventController::class, 'index'])->name('calendar.index');
Route::post('calendar/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::post('calendar/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');
Route::get('/calendario_Admin', [HomeAdminController::class, 'calendarioAdmin'])->name('calendarioAdmin');

Route::get('/obtener_submenus', function() {
    $submenuTemp1 = Submenu::orderBy('nombre', 'ASC')->get();
    return json_decode($submenuTemp1, true);
});
