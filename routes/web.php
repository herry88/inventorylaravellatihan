<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// hello world
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

//rute  baru
Route::get('belajaraja', [BelajarController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
});
