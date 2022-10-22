<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
}); 

Route::prefix('cliente')->group(function(){
    Route::get('/', [ClienteController::class, 'index'])->name('clientes-index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes-create');
    Route::post('/', [ClienteController::class, 'salvar'])->name('clientes-salvar');
});

//Route::get('/cliente', [ClienteController::class, 'index']);

