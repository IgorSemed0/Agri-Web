<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

Route::post('/api/dados', [DadosController::class, 'receberDados']);

Route::get('/', function () {
    return view('site.index');
});

Route::get('/dados', [DadosController::class, 'exibirdados'])->name('exibirdados');


Route::get('/home', [DadosController::class, 'home'])->name('home');
Route::get('/cultura', [DadosController::class, 'culturas'])->name('culturas');
Route::get('/diario',[DadosController::class, 'Diario_index'])->name('diario_index');
Route::get('/diario_show',[DadosController::class, 'Diario_show'])->name('diario_show');
Route::get('/diario_creat',[DadosController::class, 'Diario_create'])->name('diario_create');
Route::post('/diario_store',[DadosController::class, 'store_Diario'])->name('diario_store');




Route::get('/search', [DadosController::class, 'search'])->name('search');

