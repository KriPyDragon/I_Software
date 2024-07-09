<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RusuarioController;


// Rutas de Reservas
Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('/reservas/crear', [ReservaController::class, 'crear'])->name('reservas.crear');
Route::post('/reservas/almacenar', [ReservaController::class, 'almacenar'])->name('reservas.almacenar');

// Rutas de Autenticación
Auth::routes();

// Redirigir / a /reservas para establecerlo como la página principal
Route::redirect('/', '/recepcion');

//Redirigir a home
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Rutas de Todas

Route::get('/todas_reservas', [ReservaController::class, 'todas'])->name('todas_reservas');

//Ruta de recepcion

Route::get('/recepcion', function () {return view('recepcion');})->name('recepcion');







