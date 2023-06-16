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
    Route::get('/datas', [App\Http\Controllers\MembersController::class, 'index'])->name('index');
    Route::get('/datas/create', [App\Http\Controllers\MembersController::class, 'create'])->name('create');
    Route::get('/datas/{member}', [App\Http\Controllers\MembersController::class, 'show'])->name('show');
    Route::get('/datas/{member}/edit', [App\Http\Controllers\MembersController::class, 'edit'])->name('edit');
    Route::post('/datas', [App\Http\Controllers\MembersController::class, 'store'])->name('store');
    Route::put('/datas/{member}', [App\Http\Controllers\MembersController::class, 'update'])->name('update');
    Route::delete('/datas/{member}', [App\Http\Controllers\MembersController::class, 'destroy'])->name('destroy');
});