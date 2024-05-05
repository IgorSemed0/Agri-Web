<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\UserControllerController;
use App\Models\Cultura;

Route::get('/', function () {
    return view('site.index');
});
/*Cultura*/
Route::get('/home', [CulturaController::class, 'home'])->name('home');
/*Cultura*/
Route::get('/home', [CulturaController::class, 'home'])->name('home');
Route::get('/cultura', [CulturaController::class, 'culturas'])->name('culturas');
Route::get('/suporte', [CulturaController::class, 'suporte'])->name('suporte');

Route::get('/search', [CulturaController::class, 'search'])->name('search');
/* Diário*/
Route::get('/diario',[DiarioController::class, 'Diario_index'])->name('diario_index');
Route::get('/diario_show{id}',[DiarioController::class, 'Diario_show'])->name('diario_show');
Route::get('/diario_store',[DiarioController::class,'Diario_store'])->name('diario_store');
Route::post('/diario_create', [DiarioController::class, 'Diario_create'])->name('diario_create');

Route::put('/update/{id}',[DiarioController::class, 'Diario_update'])->name('diario_update');
/*Igor*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', [DadosController::class, 'exibirDados'])->name('exibirdados');
});
