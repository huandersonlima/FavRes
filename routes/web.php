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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestauranteController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/restaurantes/novo', [RestauranteController::class, 'store'])->name('add-Res');

Route::resource('restaurantes', \App\Http\Controllers\RestauranteController::class);
Route::resource('pratos', \App\Http\Controllers\PratoController::class);

require __DIR__.'/auth.php';
