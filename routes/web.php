<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/datas', [App\Http\Controllers\MembersController::class, 'index'])->name('datas.index');
    Route::get('/datas/create', [App\Http\Controllers\MembersController::class, 'create'])->name('datas.create');
    Route::get('/datas/{member}', [App\Http\Controllers\MembersController::class, 'show'])->name('datas.show');
    Route::get('/datas/{member}/edit', [App\Http\Controllers\MembersController::class, 'edit'])->name('datas.edit');
    Route::post('/datas', [App\Http\Controllers\MembersController::class, 'store'])->name('datas.store');
    Route::put('/datas/{member}', [App\Http\Controllers\MembersController::class, 'update'])->name('datas.update');
    Route::delete('/datas/{member}', [App\Http\Controllers\MembersController::class, 'destroy'])->name('datas.destroy');
    Route::get('/games', [App\Http\Controllers\GamesController::class, 'index'])->name('games.index');
    Route::get('/games/create', [App\Http\Controllers\GamesController::class, 'create'])->name('games.create');
    Route::get('/games/{game}', [App\Http\Controllers\GamesController::class, 'show'])->name('games.show');
    Route::post('/games', [App\Http\Controllers\GamesController::class, 'store'])->name('games.store');
    Route::get('/games/create/{game}', [App\Http\Controllers\GamesController::class, 'start'])->name('games.start');
    Route::post('/games/create', [App\Http\Controllers\GamesController::class, 'register'])->name('games.register');
});