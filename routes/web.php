<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PersonalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

/*Route::group(['prefix'=>'cargos'],function(){
    Route::get('/', 'CargosController@index')->name('cargos.index');
    Route::get('/create', 'CargosController@create')->name('cargos.create');
    Route::post('/', 'CargosController@store')->name('cargos.store');
    Route::get('/edit/{id}', 'CargosController@edit')->name('cargos.edit');
    Route::put('/{id}', 'CargosController@update')->name('cargos.update');
    Route::get('/buscar', 'EstadosController@buscar')->name('cargos.buscar');
});*/

Route::group(['prefix'=>'categoria'],function(){
    Route::get('/', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/create', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::post('/', [CategoriaController::class, 'store'] )->name('categoria.store');
    Route::get('/edit/{id}', [CategoriaController::class, 'edit'] )->name('categoria.edit');
    Route::put('/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::get('/{id}',[CategoriaController::class, 'destroy'])->name('categoria.destroy');
});
Route::group(['prefix'=>'marca'],function(){
    Route::get('/', [MarcaController::class, 'index'])->name('marca.index');
    Route::get('/create', [MarcaController::class, 'create'])->name('marca.create');
    Route::post('/', [MarcaController::class, 'store'] )->name('marca.store');
    Route::get('/edit/{id}', [MarcaController::class, 'edit'] )->name('marca.edit');
    Route::put('/{id}', [MarcaController::class, 'update'])->name('marca.update');
    Route::get('/{id}',[MarcaController::class, 'destroy'])->name('marca.destroy');
});
Route::group(['prefix'=>'personal'],function(){
    Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
    Route::get('/create', [PersonalController::class, 'create'])->name('personal.create');
    Route::post('/', [PersonalController::class, 'store'] )->name('personal.store');
    Route::get('/edit/{id}', [PersonalController::class, 'edit'] )->name('personal.edit');
    Route::put('/{id}', [PersonalController::class, 'update'])->name('personal.update');
    Route::get('/{id}',[PersonalController::class, 'destroy'])->name('personal.destroy');
});

