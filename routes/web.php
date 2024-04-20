<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

Route::get('/', function () {
    return view('site.index');
});

Route::get('/home', [DadosController::class, 'home'])->name('home');
Route::get('/cultura', [DadosController::class, 'culturas'])->name('culturas');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DadosController::class, 'exibirDados'])->name('exibirdados');
});

