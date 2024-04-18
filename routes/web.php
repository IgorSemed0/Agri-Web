<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

Route::post('/api/dados', [DadosController::class, 'receberDados']);

Route::get('/', function () {
    return view('site.index');
});

Route::get('/dados', [DadosController::class, 'exibirdados'])->name('exibirdados');

<<<<<<< HEAD
Route::get('/home', [DadosController::class, 'home'])->name('home');
Route::get('/cultura', [DadosController::class, 'culturas'])->name('culturas');

=======
>>>>>>> ce6fbff2690d22e25f257114b5977ccc9759656c
