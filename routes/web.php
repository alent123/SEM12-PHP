<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return redirect('/inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');
 
Route::get('/mascotas/tipo', [MascotaController::class, 'porTipo'])->name('mascotas.por_tipo');

Route::get('/mascotas/edad', [MascotaController::class, 'porEdad'])->name('mascotas.por_edad');

Route::get('/mascotas/filtro', [MascotaController::class, 'filtro'])->name('mascotas.filtro');
