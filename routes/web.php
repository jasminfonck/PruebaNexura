<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/index', 'IndexController@index')->name('index');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::post('/guardar', [App\Http\Controllers\IndexController::class, 'guardar'])->name('guardar');
Route::get('/editar', [App\Http\Controllers\IndexController::class, 'editar'])->name('editar');
Route::get('/eliminar', [App\Http\Controllers\IndexController::class, 'eliminar'])->name('eliminar');