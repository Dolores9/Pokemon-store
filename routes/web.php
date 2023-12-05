<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])    ->middleware('auth');



Route::resource('pokemons', PokemonController::class);

Route::get('admin',[AdminController::class, 'index'])->name('admin')->middleware('admin');
//Route::get('admin', [AdminController::class, 'destroy'])->name('admin')->middleware('admin');
Route::post('/pokemons/{id}/toggle-status', 'PokemonController@togglePokemonStatus')->name('pokemons.toggle-status');

Auth::routes();






