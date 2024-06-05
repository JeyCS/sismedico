<?php

use App\Http\Controllers\HistoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medicos', MedicosController::class);
Route::resource('pacientes', PacienteController::class);
Route::resource('historia', HistoriaController::class);