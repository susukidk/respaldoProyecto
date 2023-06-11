<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\Archivos;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::post('/agregarNuevo', [AuthController::class, 'agregarNuevo']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrarUsuario', [AuthController::class, 'registrarUsuario'])->name('registrarUsuario');

Route::middleware(['auth'])->group(function () {
    Route::get('/inicio', [AltasBajas::class, 'index'])->name('inicio');

    Route::get('/crud', [AltasBajas::class, 'index']);
    Route::get('/crud/create', [AltasBajas::class, 'create']);

    Route::post('/crud/store', [AltasBajas::class, 'store']);
    Route::get('/crud/edit/{id}', [AltasBajas::class, 'edit'])->name('edit');
    Route::put('/crud/update/{id}', [AltasBajas::class, 'update'])->name('update');
    Route::get('/crud/show/{id}', [AltasBajas::class, 'show'])->name('show');
    Route::delete('/crud/destroy/{id}', [AltasBajas::class, 'destroy'])->name('destroy');

    Route::get('/crud/datos_A/{id}', [AltasBajas::class, 'datos_A'])->name('datos_A');
    Route::get('/misArchivos/tabla', [AltasBajas::class, 'tabla'])->name('tabla');

    Route::post('/misArchivos/store/{id}', [AltasBajas::class, 'store'])->name('store');
    Route::put('/misArchivos/update/{id}', [AltasBajas::class, 'updateArchivo'])->name('updateArchivo');
    Route::get('/verArchivos', [AltasBajas::class, 'verArchivos'])->name('verArchivos');
    Route::get('/verArchivos/{id}', [AltasBajas::class, 'verArchivos'])->name('verArchivos');

});
