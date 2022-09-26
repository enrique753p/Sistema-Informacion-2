<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\RubroController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ReportAsistenciaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReportePagoController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
Route::get ('/dash','App\Http\Controllers\DashboardController@index');

//--RUTAS DEL DASHBOAR---
Route::get('users',[UserController::class,'index'])->name('user.index');//Administrador
Route::get('empleado',[EmpleadoController::class,'index'])->name('empleado.index');//Empleado
Route::get('cliente',[ClienteController::class,'index'])->name('cliente.index');//Cliente
Route::get('areas',[AreasController::class,'index'])->name('area.index');//Areas
Route::get('rubro',[RubroController::class,'index'])->name('rubro.index');//rubro
Route::get('tarea',[TareaController::class,'index'])->name('tarea.index');//tareas asigna
Route::get('asistencia',[AsistenciaController::class,'index'])->name('asistencia.index');//asistencia
Route::get('reportAsistencia',[ReportAsistenciaController::class,'index'])->name('reportAsistencia.index');//Reporte de Asistencias
Route::get('pago',[PagoController::class,'index'])->name('pago.index');//PAGOS
Route::get('reportePago',[ReportePagoController::class,'index'])->name('reportePago.index');//Reporte de PAGOS

//-----