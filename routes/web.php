<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadosController;

Route::get('/', function () {
    return view('site.index');
});

Route::get('/dados', [DadosController::class, 'exibirdados'])->name('exibirdados');


Route::get('/home', [DadosController::class, 'home'])->name('home');
Route::get('/cultura', [DadosController::class, 'culturas'])->name('culturas');


Route::get('/login', [Auth\AuthController::class, 'showLoginForm'])->name('login');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::prefix('user')->group(function(){
    Route::get('index', ['as' => 'user.index', 'uses'=> 'UserController@index']);
    Route::get('create', ['as' => 'user.create.index', 'uses'=> 'UserController@create']);
    Route::post('store', ['as' => 'user.store', 'uses'=> 'UserController@store']);
    Route::get('edit/{id}', ['as' => 'user.edit.index', 'uses'=> 'UserController@edit']);
    Route::post('update/{id}', ['as' => 'user.update', 'uses'=> 'UserController@update']);
    Route::get('destroy/{id}', ['as' => 'user.destroy', 'uses'=> 'UserController@destroy']);
    Route::get('purge/{id}', ['as' => 'user.purge', 'uses'=> 'UserController@purge']);
});
});
