<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

Route::post('/api/dados', [DadosController::class, 'receberDados']);

Route::get('/', function () {
    return view('site.index');
});

Route::get('/dados', [DadosController::class, 'exibirdados'])->name('exibirdados');
