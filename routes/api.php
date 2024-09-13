<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

// Route::post('/dados', [DadosController::class, 'receberDados']);
Route::post('/dados', [DadosController::class, 'store']);
