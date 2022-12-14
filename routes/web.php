<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;

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


Route::get('/', [HomeController::class, 'home']);
Route::get('/productos', [ProductoController::class, 'consultar']);
Route::get('/usuario/registrar', [UsuarioController::class, 'registrar']);
Route::post('/usuario/guardar', [UsuarioController::class, 'guardar']);
Route::get('/usuario/detalle/{id}', [UsuarioController::class, 'detalle']);


