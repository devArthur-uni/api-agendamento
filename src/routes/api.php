<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;

Route::get('/medicos', [MedicoController::class, 'index']);
Route::post('/medicos', [MedicoController::class, 'store']);