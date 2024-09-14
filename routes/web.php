<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\CulturaController;
use App\Http\Controllers\CulturaControllers;
use App\Http\Controllers\YourController;


Route::get('/', function () {
    return view('site.Temp.index');
});

Route::get('/teste', function() {
    return 'FuncionaGET!';
});

/* Cultura */
Route::get('/home', [CulturaController::class, 'home'])->name('home');
Route::get('/cultura', [CulturaController::class, 'culturas'])->name('culturas');
Route::get('/search', [CulturaController::class, 'search'])->name('search');
Route::post('/cultura/inserir', [CulturaControllers::class, 'inserirCultura']);


/* Diário */
Route::get('/diario', [DiarioController::class, 'Diario_index'])->name('diario_index');
Route::get('/diario_show{id}', [DiarioController::class, 'Diario_show'])->name('diario_show');
Route::get('/diario_store', [DiarioController::class,'Diario_store'])->name('diario_store');
Route::post('/diario_create', [DiarioController::class, 'Diario_create'])->name('diario_create');
Route::delete('/delete/{id}', [DiarioController::class, 'Diario_delete'])->name('diario_delete');
Route::put('/update/{id}', [DiarioController::class, 'Diario_update'])->name('diario_update');

/* Auth */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DadosController::class, 'exibirDados'])->name('exibirdados');
});


Route::get('/get-latest-data', [YourController::class, 'getLatestData']);
Route::get('/api/dados-atuais', [DadosController::class, 'obterDadosAtuais']);

Route::post('/comparar-culturas', [DadosController::class, 'compararCulturas']);
