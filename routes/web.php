<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [IndustriController::class, 'index'])->name('industri');

Route::get('/biodata', [BiodataController::class, 'biodata']);

Route::get('/tambah', [BiodataController::class, 'tambah']);
Route::post('/biodata',[BiodataController::class, 'menambahkan']);

Route::get('/biodata/{id}/edit', [BiodataController::class, 'edit']);
Route::put('/biodata/{id}', [BiodataController::class, 'update']);

Route::delete('/biodata/{id}', [BiodataController::class, 'hapus']);

